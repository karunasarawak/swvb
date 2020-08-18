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
        $data = DB::table('stamping_fee_batch')
                ->leftJoin('stamping_fee_list', 'stamping_fee_list.sfb_id', 'stamping_fee_batch.sfb_id')
                ->leftJoin('memberships', 'memberships.mbrship_no','stamping_fee_list.mbrship_no')
                ->leftJoin('leads','leads.lead_id','memberships.lead_id1')
                ->leftJoin('packages','packages.package_id','memberships.package_id')
                ->where('stamping_fee_list.sfb_id', $this->batch_id)
                ->select('memberships.mbrship_no','memberships.application_date', 'leads.name','memberships.agreement_no','memberships.agreement_date');
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
                    $event->sheet->getStyle($header)->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_CENTER]]);

                    //Application Date
                    $apply = 'B5:D5';
                    $event->sheet->mergeCells($apply);

                    //Table Header
                    $table_header = 'A7:P7';
                    $columns = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P'];

                    $event->sheet->getStyle($table_header)->getAlignment()->setWrapText(true);
                    $event->sheet->getStyle($table_header)->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical'=>Alignment::VERTICAL_CENTER]]);
                    $event->sheet->getStyle($table_header)->applyFromArray(['font' => ['bold'=>true]]);
                    foreach($columns as $col)
                    {
                        $event->sheet->getDelegate()->getColumnDimension($col)->setWidth(15);
                    }

                    //Table Body

                    //Table

                    //Signature

                },
            ];
    }

    public function footer(): array
    {
        return[
            ['HI'],
            ['HI'],
        ];
    }
}

