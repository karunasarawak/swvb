<?php

namespace App\Exports;

use App\Http\Controllers\ReportController;
use App\StampingFeeBatch;
use App\StampingFee;
use App\MttRegistration;
use DB;

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

class StampingFeeExportLHDN implements FromCollection, WithHeadings, WithEvents
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
                ->leftJoin('lhdn','lhdn.lhdn_id','stamping_fee_batch.lhdn_id')
                ->where('stamping_fee_list.sfb_id', $this->batch_id)
                ->select(
                    'lhdn.lhdn_id','lhdn.jenis_penyeteman','lhdn.kategori','lhdn.jenis_suratcara',
                    'memberships.agreement_date','lhdn.butiran_cara','packages.package_price',
                    'lhdn.prinsipal','lhdn.huraian','lhdn.duti','stamping_fee_batch.penalty',
                    'lhdn.bil_asal','lhdn.bil_salinan','lhdn.amount_salinan','lhdn.jumlah_duti',
                    'lhdn.pertama_kategori','lhdn.pertama_nama','lhdn.pertama_ic','lhdn.pertama_warganegara','lhdn.pertama_negara1',
                    'lhdn.pertama_cukai','lhdn.pertama_alamat1','lhdn.pertama_alamat2','lhdn.pertama_alamat3','lhdn.pertama_negara2',
                    'lhdn.pertama_negeri','lhdn.pertama_poskad','lhdn.pertama_bandar','lhdn.pertama_tel','lhdn.pertama_email'
                )
                ->get();
        // dd($data);
        return $data;
    }

    public function headings(): array
    {
        return 
        [
            [' '],
            [' ',' ','LEMBAGA HASIL DALAM NEGERI MALAYSIA'],
            [' ',' ','PEJABAT SETEM CAWANGAN / PUSAT KHIDMAT HASIL'],
            [],
            [' ',' ','Note: Sila lengakapkan borang ini bagi ruangan yang bertanda bintang(*)'],
            [' '],
            [
                'Maklumat Am Surat Cara',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Pihak Pertama',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Pihak Pertama',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Pihak Pertama',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Pihak Kedua',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Pihak Kedua',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Pihak Kedua',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
            ],
            //Error
            [
                ' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Individual Pertama',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Individual Kedua',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Individual Ketiga',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Individual Pertama',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Individual Kedua',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
                'Individual Ketiga',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',
            ],
            [
                'Bil.',
                'Jenis Pernyataan',
                'Kategori',
                'Jenis Suratcara',
                'Tarikh S/Cara (DD/MM/YYY)',
                '* Butiran S/Cara',
                '* Nilai Kontrak/Balasan/Pinjaman (RM)',
                'Prinsipal/Subsidiari',
                'Huraian',
                'Duti Dikenakan (RM)',
                'Penalti (RM)',
                '* Bil. Asal (0-1)',
                '* Bil Salinan (0-30)',
                'Amaun Salinan (RM)',
                'Jumlah Duti Kena Dibayar (RM)',
                'Kategori',
                '* Nama Penuh/ Nama Syarikat',
                '* No IC/ Passport/Pendaftaran Syarikat',
                '* Warganegara',
                '* Negara',
                'No. Cukai Pendapatan',
                '* Alamat 1',
                '* Alamat 2',
                'Alamat 3',
                '* Negara',
                '* Negeri',
                '* Poskad',
                '* Bandar',
                '* No. Tel',
                '* Email',
                'Kategori','* Nama Penuh/ Nama Syarikat','* No IC/ Passport/Pendaftaran Syarikat','* Warganegara','* Negara','No. Cukai Pendapatan','* Alamat 1','* Alamat 2','Alamat 3',
                '* Negara','* Negeri','* Poskad','* Bandar','* No. Tel','* Email',
                'Kategori','* Nama Penuh/ Nama Syarikat','* No IC/ Passport/Pendaftaran Syarikat','* Warganegara','* Negara','No. Cukai Pendapatan','* Alamat 1','* Alamat 2','Alamat 3',
                '* Negara','* Negeri','* Poskad','* Bandar','* No. Tel','* Email',
                'Kategori','* Nama Penuh/ Nama Syarikat','* No IC/ Passport/Pendaftaran Syarikat','* Warganegara','* Negara','No. Cukai Pendapatan','* Alamat 1','* Alamat 2','Alamat 3',
                '* Negara','* Negeri','* Poskad','* Bandar','* No. Tel','* Email',
                'Kategori','* Nama Penuh/ Nama Syarikat','* No IC/ Passport/Pendaftaran Syarikat','* Warganegara','* Negara','No. Cukai Pendapatan','* Alamat 1','* Alamat 2','Alamat 3',
                '* Negara','* Negeri','* Poskad','* Bandar','* No. Tel','* Email',
                'Kategori','* Nama Penuh/ Nama Syarikat','* No IC/ Passport/Pendaftaran Syarikat','* Warganegara','* Negara','No. Cukai Pendapatan','* Alamat 1','* Alamat 2','Alamat 3',
                '* Negara','* Negeri','* Poskad','* Bandar','* No. Tel','* Email',
            ]
        ];
    }

    // public function drawings()
    // {
    //     $drawing = new Drawing();
    //     $drawing->setName('Logo');
    //     $drawing->setDescription('This is my logo');
    //     $drawing->setPath(public_path('\lhdn_logo.JPG'));
    //     $drawing->setHeight(90);
    //     $drawing->setCoordinates('B2');

    //     return $drawing;
    // }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) 
            {
                // $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
                // $drawing->setName('Logo');
                // $drawing->setDescription('Logo');
                // $drawing->setPath(public_path('lhdn_logo.jpg'));
                // $drawing->setCoordinates('B1');

                // $drawing->setWorksheet($event->sheet->getDelegate());

                // Header
                $event->sheet->setCellValue('A1','DFS');
                $event->sheet->setCellValue('A6','START');
                $event->sheet->setCellValue('DA6','END');
                // $event->sheet->mergeCells('B2:B5');

                $event->sheet->getStyle('A6')->applyFromArray(['font' => ['bold'=>true]]);
                $event->sheet->getStyle('DA6')->applyFromArray(['font' => ['bold'=>true]]);
                $event->sheet->getStyle('DA6')->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_RIGHT]]);

                //Table Head
                $table_header = [
                    'A7:O8','P7:AD7','AE7:AS7','AT7:BH7','BI7:BW7','BX7:CL7','CM7:DA7',
                    'P8:AD8','AE8:AS8','AT8:BH8','BI8:BW8','BX8:CL8','CM8:DA8',
                ];

                foreach($table_header as $head)
                {
                    $event->sheet->mergeCells($head);
                    $event->sheet->getStyle($head)->applyFromArray(['font' => ['bold'=>true]]);
                    $event->sheet->getStyle($head)->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical'=>Alignment::VERTICAL_CENTER]]);
                    $event->sheet->getStyle($head)->applyFromArray(['borders' => 
                            [
                                'allBorders' => [
                                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                    'color' => ['argb' => '0000000'],
                                ],
                            ],
                        ]
                    );
                }

                $maklumat = 'A7:O8';
                $pihak = ['P7:AD7','AE7:AS7','AT7:BH7'];
                $pihak2 = ['BI7:BW7','BX7:CL7','CM7:DA7'];
                
                //Yellow
                $event->sheet->getDelegate()->getStyle('A7:O8')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('ffff15');

                //Blue
                foreach($pihak as $p)
                {
                    $event->sheet->getDelegate()->getStyle($p)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('99CCFF');
                }

                //Green
                foreach($pihak2 as $p2)
                {
                    $event->sheet->getDelegate()->getStyle($p2)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('94D194');
                    
                }

                $column = 
                [
                    'B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
                    'AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ',
                    'BA','BB','BC','BD','BE','BF','BG','BH','BI','BJ','BK','BL','BM','BN','BO','BP','BQ','BR','BS','BT','BU','BV','BW','BX','BY','BZ',
                    'CA','CB','CC','CD','CE','CF','CG','CH','CI','CJ','CK','CL','CM','CN','CO','CP','CQ','CR','CS','CT','CU','CV','CW','CX','CY','CZ',
                    'DA'
                ];

                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(7);
                foreach($column as $col)
                {
                    $event->sheet->getDelegate()->getColumnDimension($col)->setWidth(22);
                }

                $header = 'A9:DA9';
                $event->sheet->getStyle($header)->getAlignment()->setWrapText(true);
                $event->sheet->getStyle($header)->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical'=>Alignment::VERTICAL_CENTER]]);
                $event->sheet->getStyle($header)->applyFromArray(['font' => ['bold'=>true]]);
                $event->sheet->getStyle($header)->applyFromArray(['borders' => 
                        [
                            'allBorders' => [
                                'borderStyle' => PHPExcel_Style_Border::BORDER_THICK,
                                'color' => ['argb' => '0000000'],
                            ],
                        ],
                    ]
                );

                //Table Body
                $count = ReportController::countResult($this->batch_id);
                $row = 9 + $count;

                for($i = 1; $i <= $count; $i++)
                {
                    $event->sheet->setCellValue('A'.(9+$i),$i);
                }


                $body = 'A10:DA'.$row;
                $event->sheet->getStyle($body)->getAlignment()->setWrapText(true);
                $event->sheet->getStyle($body)->applyFromArray(['alignment'=>['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical'=>Alignment::VERTICAL_CENTER]]);
                $event->sheet->getStyle($body)->applyFromArray(['borders' => 
                        [
                            'allBorders' => [
                                'borderStyle' => PHPExcel_Style_Border::BORDER_THIN,
                                'color' => ['argb' => '0000000'],
                            ],
                        ],
                    ]
                );
                //Border
                $thick_border = ['A9:O'.$row, 'P9:AD'.$row, 'AE9:AS'.$row, 'AT9:BH'.$row, 'BI9:BW'.$row, 'BX9:CL'.$row, 'CM9:DA'.$row];
                foreach($thick_border as $border)
                {
                    $event->sheet->getStyle($border)->applyFromArray(['borders' => 
                            [
                                'outline' => [
                                    'borderStyle' => PHPExcel_Style_Border::BORDER_THICK,
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
