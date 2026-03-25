@extends('layouts.master')

@section('css')
    <style>
        @media print {
            #print_Button { display: none; }
            .main-content-body-invoice { padding: 0 !important; margin: 0 !important; }
            .card { border: none !important; }
            body { background-color: #fff !important; }
        }
        .invoice-info-row { display: flex; justify-content: space-between; padding: 5px 0; border-bottom: 1px solid #f2f2f2; }
        .invoice-info-row span:first-child { font-weight: bold; color: #555; }
    </style>
@endsection

@section('title')
    معاينة طباعة الفاتورة
@stop

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الفواتير</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ معاينة الطباعة</span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row row-sm justify-content-center">
        <div class="col-lg-10 col-xl-9">
            <div class="main-content-body-invoice" id="print">
                <div class="card card-invoice shadow-sm">
                    <div class="card-body p-5">
                        <div class="invoice-header d-md-flex justify-content-between align-items-center mb-4">
                            <div>
                                <h1 class="invoice-title text-primary mb-0">فاتورة تحصيل</h1>
                                <p class="text-muted small">رقم الفاتورة: #{{ $invoices->invoice_number }}</p>
                            </div>
                            <div class="billed-from text-md-right mt-3 mt-md-0">
                                <h5 class="text-uppercase font-weight-bold">BootstrapDash, Inc.</h5>
                                <p class="text-muted mb-0">شارع 201، مدينة مثال، الدولة<br>
                                    هاتف: 324 445-4544<br>
                                    إيميل: youremail@companyname.com</p>
                            </div>
                        </div>

                        <hr class="mg-b-30">

                        <div class="row">
                            <div class="col-md-6">
                                <p class="h6 text-muted">جهة الدفع (Billed To):</p>
                                <div class="billed-to mt-2">
                                    <h5 class="font-weight-bold">Juan Dela Cruz</h5>
                                    <p class="text-muted">طريق باترسون 4033، نيويورك 10301<br>
                                        هاتف: 324 445-4544<br>
                                        إيميل: youremail@companyname.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="h6 text-muted text-md-right">تفاصيل الفاتورة:</p>
                                <div class="p-3 bg-light rounded shadow-sm mt-2">
                                    <div class="invoice-info-row"><span>رقم الفاتورة:</span> <span>{{ $invoices->invoice_number }}</span></div>
                                    <div class="invoice-info-row"><span>تاريخ الإصدار:</span> <span>{{ $invoices->invoice_Date }}</span></div>
                                    <div class="invoice-info-row"><span>تاريخ الاستحقاق:</span> <span>{{ $invoices->Due_date }}</span></div>
                                    <div class="invoice-info-row border-0"><span>القسم:</span> <span>{{ $invoices->section->section_name }}</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive mt-5">
                            <table class="table table-bordered table-striped text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>المنتج</th>
                                        <th>مبلغ التحصيل</th>
                                        <th>العمولة</th>
                                        <th>الإجمالي الفرعي</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="font-weight-bold">{{ $invoices->product }}</td>
                                        <td>{{ number_format($invoices->Amount_collection, 2) }}</td>
                                        <td>{{ number_format($invoices->Amount_Commission, 2) }}</td>
                                        @php $total = $invoices->Amount_collection + $invoices->Amount_Commission; @endphp
                                        <td class="font-weight-bold text-dark">{{ number_format($total, 2) }}</td>
                                    </tr>
                                    
                                    <tr class="bg-white">
                                        <td colspan="2" rowspan="4" class="text-right align-middle">
                                            <div class="p-3">
                                                <h6 class="text-primary font-weight-bold">ملاحظات:</h6>
                                                <p class="small text-muted mb-0">شكراً لتعاملكم معنا. يرجى سداد المبلغ قبل تاريخ الاستحقاق لتجنب الغرامات.</p>
                                            </div>
                                        </td>
                                        <td class="font-weight-bold">الإجمالي</td>
                                        <td colspan="2" class="h5 font-weight-bold">{{ number_format($total, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-danger font-weight-bold">قيمة الخصم</td>
                                        <td colspan="2" class="h6 text-danger">- {{ number_format($invoices->Discount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold text-muted">نسبة الضريبة ({{ $invoices->Rate_VAT }})</td>
                                        <td colspan="2" class="h6 text-muted">{{ number_format($invoices->Value_VAT, 2) }}</td>
                                    </tr>
                                    <tr class="table-primary shadow-sm">
                                        <td class="text-uppercase font-weight-bold h5">الإجمالي النهائي</td>
                                        <td colspan="2" class="h4 font-weight-bold text-primary">{{ number_format($invoices->Total, 2) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-print-none text-right mt-4">
                            <button class="btn btn-primary btn-lg shadow" id="print_Button" onclick="printDiv()"> 
                                <i class="mdi mdi-printer ml-1"></i> طباعة الفاتورة 
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>
@endsection
