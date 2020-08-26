<?php

namespace App\Exports;

use App\StampingFee;
use App\MttRegistration;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PHPExcel_Style_Border;
use App\Http\Controllers\ReportController;

class StampingFeeExport implements FromCollection, WithHeadings, WithEvents
{
    
    protected $batch_id;

    function __construct($batch_id)
    {
        $this->batch_id = $batch_id;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // dd($this->batch_id);
        $data = DB::table('stamping_fee_batch')
                ->leftJoin('stamping_fee_list', 'stamping_fee_list.sfb_id', 'stamping_fee_batch.sfb_id')
                ->leftJoin('memberships', 'memberships.mbrship_no','stamping_fee_list.mbrship_no')
                ->leftJoin('leads','leads.lead_id','memberships.lead_id1')
                ->leftJoin('packages','packages.package_id','memberships.package_id')
                ->where('stamping_fee_list.sfb_id', $this->batch_id)
                ->select('stamping_fee_batch.sfb_id','memberships.mbrship_no','memberships.application_date', 'leads.name','memberships.agreement_no','memberships.agreement_date',
                        'packages.package','packages.package_price','stamping_fee_batch.sfb_sent_at',
                        'stamping_fee_batch.stamping_fee','stamping_fee_batch.penalty','stamping_fee_batch.total_stamping_fee',
                        'stamping_fee_batch.dispatch_date','stamping_fee_batch.dispatch_mode','stamping_fee_batch.consignment_note','stamping_fee_batch.dispatch_status')
                ->get();
        return $data;
    }

    public function headings(): array
    {
        return 
        [
            ['Sara Worldwide Vacations Berhad'],
            ['(Easturia Vacation Club)'],
            ['Membership Agreement Listing'],
            [],
            [
                ' ',
                'Application Date From: ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                ' ',
                'To: ',
                
            ],[],
            [
                'No',
                'Membership No.',
                'Date of Application',
                'Name(Primary)',
                'Agreement No.',
                'Agreement Date',
                'Package Purchased',
                'Purchase Price (RM)',
                'Stamping Date',
                'Stamping Fee (RM)',
                'Penalty Fee (RM)',
                'Total Stamping Fee (RM)',
                'Date of Dispatch',
                'Mode of Dispatch',
                'Reference/Consignment Note No',
                'Status of Dispatch',
            ],[],
        ];
    }

    public function registerEvents(): array
    {
        return 
            [
                AfterSheet::class=> function(AfterSheet $event) 
                {
                    //Header
                    $header = 'A1:P4';
                    $event->sheet->getStyle($header)->applyFromArray(['font' => ['bold'=>true]]);
                    $event->sheet->mergeCells('A1:P1');
                    $event->sheet->mergeCells('A2:P2');
                    $event->sheet->mergeCells('A3:P3');
                    $event->sheet->getStyle($header)->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical'=>Alignment::VERTICAL_CENTER]]);
                    $event->sheet->getDelegate()->getRowDimension(1)->setRowHeight(20);
                    $event->sheet->getDelegate()->getRowDimension(2)->setRowHeight(20);
                    $event->sheet->getDelegate()->getRowDimension(3)->setRowHeight(20);

                    //Application Date
                    $apply = 'B5:D5';
                    $to = 'J5';
                    $event->sheet->mergeCells($apply);
                    $event->sheet->getStyle($apply)->applyFromArray(['font' => ['bold'=>true]]);
                    $event->sheet->getStyle($to)->applyFromArray(['font' => ['bold'=>true]]);

                    //Table Header
                    $table_header = 'A7:P7';
                    $columns = ['B','C','E','F','H','I','J','K','L','M','N','O','P'];
                    $column2 = ['D','G'];

                    $event->sheet->getStyle($table_header)->getAlignment()->setWrapText(true);
                    $event->sheet->getStyle($table_header)->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical'=>Alignment::VERTICAL_CENTER]]);
                    $event->sheet->getStyle($table_header)->applyFromArray(['font' => ['bold'=>true]]);
                    $event->sheet->getStyle($table_header)->applyFromArray(['borders' => 
                            [
                                'allBorders' => [
                                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                    'color' => ['argb' => '0000000'],
                                ],
                            ],
                        ]
                    );

                    foreach($columns as $col)
                    {
                        $event->sheet->getDelegate()->getColumnDimension($col)->setWidth(15);
                    }
                    foreach($column2 as $col2)
                    {
                        $event->sheet->getDelegate()->getColumnDimension($col2)->setWidth(25);
                    }

                    //Table Body
                    $count = ReportController::countResult($this->batch_id);
                    for($i = 1; $i <= $count; $i++)
                    {
                        $event->sheet->setCellValue('A'.(7+$i), $i);
                        // $event->sheet->setCellValue('J'.(7+$i), '20');

                        $row = 'A'.(7+$i).':P'.(7+$i);
                        $event->sheet->getStyle($row)->applyFromArray(['borders' => 
                                [
                                    'allBorders' => [
                                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                        'color' => ['argb' => '0000000'],
                                    ],
                                ],
                            ]
                        );
                        $event->sheet->getStyle($row)->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_CENTER]]);
                    }
                    
                    //Signature
                    $sign = 7 + $count + 4;
                    $sign_line = $sign + 1;
                    $date = $sign + 2;
                    $time = $sign + 3;

                    $signature = ['C'. $sign. ':D' . $sign, 'G'. $sign. ':H' . $sign, 'K'. $sign. ':L' . $sign];
                    $signature_line = ['C'. $sign_line. ':D' . $sign_line, 'G'. $sign_line. ':H' . $sign_line, 'K'. $sign_line. ':L' . $sign_line];
                    $signature_date = ['C'. $date, 'G'. $date, 'K'. $date];
                    $signature_name = ['C'. $time, 'G'. $time, 'K'. $time];
                    

                    $event->sheet->setCellValue('C'. $sign, "Prepared By:");
                    $event->sheet->setCellValue('G'.$sign,"Checked & Verified By:");
                    $event->sheet->setCellValue('K'.$sign,"Approved By:");

                    foreach($signature as $sign)
                    {
                        $event->sheet->mergeCells($sign);
                        $event->sheet->getStyle($sign)->applyFromArray(['font' => ['bold'=>true]]);

                    }

                    foreach($signature_line as $line)
                    {
                        $event->sheet->mergeCells($line);
                        $event->sheet->getStyle($line)->applyFromArray(
                            ['borders' => 
                                [
                                    'bottom' => [
                                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                        'color' => ['argb' => '0000000'],
                                    ],
                                ],
                            ]
                        );
                    }

                    foreach($signature_date as $date)
                    {
                        $event->sheet->setCellValue($date, "Date: ");
                    }

                    foreach($signature_name as $name)
                    {
                        $event->sheet->setCellValue($name, "Name: ");
                    }
                    
                    $event->sheet->getDelegate()->getRowDimension($sign_line)->setRowHeight(100);

                },
            ];
    }

    // public function footer(): array
    // {
    //     return[
    //         ['HI'],
    //         ['HI'],
    //     ];
    // }
}

{{  }}