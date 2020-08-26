<?php

namespace App\Exports;

use App\CardPrintingBatch;
use App\Http\Controllers\ReportController;
use DB;

use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Events\Fill;



use PHPExcel;
use PHPExcel_IOFactory;
use PHPExcel_Style_Border;
use PHPExcel_Style_Color;
use PHPExcel_Style_Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class CardPrintingExport implements FromView, WithEvents
{
    protected $batch_id;

    function __construct($batch_id)
    {
        $this->batch_id = $batch_id;
    }

    /**
    * @return \Illuminate\Support\Collection
    */

    public function view():View
    {
        $batchDetail = DB::table('card_printing_batch')
                        ->join('suppliers','suppliers.supplier_id','card_printing_batch.supplier_id')
                        ->get();

        $memberList = DB::table('card_printing_list')->where('cpb_id', $this->batch_id)
                  ->join('memberships', 'memberships.mbrship_no', 'card_printing_list.mbrship_no')
                  ->join('leads as lead1','lead1.lead_id','memberships.lead_id1')
                  ->leftJoin('leads as lead2', 'lead2.lead_id', 'memberships.lead_id2')
                  ->select('lead1.name as name1','lead2.name as name2','memberships.mbrship_exp', 'memberships.mbrship_no', 'memberships.mbrship_status')
                  ->get();

        $payload = ['batchDetail'=>$batchDetail[0], 'memberList'=>$memberList];

        // dd($payload);

        return view('pages.cardprinting-excel',['payload'=> $payload]);
        // return view($this->view,['payload' => $payload]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) 
            {
                
                $column = ['A','B','C','D','E'];

                foreach($column as $col)
                {
                    $event->sheet->getDelegate()->getColumnDimension($col)->setWidth(25);
                }
                //Batch Title
                $batch_title = 'A3';
                $event->sheet->getStyle($batch_title)->applyFromArray(['font' => ['bold'=>true]]);

                //Batch Detail
                $batch = 'A2:D6';
                $event->sheet->getStyle($batch)->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_LEFT]]);

                //Table
                $count = ReportController::countResult($this->batch_id);
                for($i = 0; $i <= $count; $i++)
                {
                    $body = 'A'.(9+$i).':D'.(9+$i);
                    $event->sheet->getStyle($body)->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical'=>Alignment::VERTICAL_CENTER]]);
                    $event->sheet->getStyle($body)->applyFromArray(['borders' => 
                                [
                                    'allBorders' => [
                                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                        'color' => ['argb' => '0000000'],
                                    ],
                                ],
                            ]
                    );
                }

                
                
            },
        ];
    }

}
