@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection

@section('title')
    اضافة فاتورة
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الفواتير</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة فاتورة</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-check-circle ml-1"></i> {{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card shadow-sm">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0 pb-0 text-primary">بيانات الفاتورة الأساسية</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('invoices.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                        {{ csrf_field() }}

                        {{-- Section 1: Invoice Basics --}}
                        <div class="row mb-3">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="inputName" class="font-weight-bold">رقم الفاتورة <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="inputName" name="invoice_number" 
                                           placeholder="أدخل رقم الفاتورة" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="font-weight-bold">تاريخ الفاتورة</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                        </div>
                                        <input class="form-control fc-datepicker" name="invoice_Date" 
                                               type="text" value="{{ date('Y-m-d') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="font-weight-bold">تاريخ الاستحقاق</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-calendar-check"></i></div>
                                        </div>
                                        <input class="form-control fc-datepicker" name="Due_date" 
                                               placeholder="YYYY-MM-DD" type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Section 2: Products & Sections --}}
                        <div class="row mb-3">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="font-weight-bold">القسم</label>
                                    <select name="Section" class="form-control SlectBox" required>
                                        <option value="" selected disabled>-- حدد القسم --</option>
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="font-weight-bold">المنتج</label>
                                    <select id="product" name="product" class="form-control select2">
                                        <!-- سيتم تحميله عبر AJAX -->
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="font-weight-bold">مبلغ التحصيل</label>
                                    <input type="text" class="form-control" name="Amount_collection"
                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                           placeholder="0.00">
                                </div>
                            </div>
                        </div>

                        {{-- Section 3: Amounts & VAT --}}
                        <div class="row mb-3 bg-light p-3 rounded">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="font-weight-bold text-success">مبلغ العمولة <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" id="Amount_Commission"
                                           name="Amount_Commission" required
                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="font-weight-bold text-danger">الخصم</label>
                                    <input type="text" class="form-control form-control-lg" id="Discount" name="Discount"
                                           value="0" required
                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label class="font-weight-bold text-info">نسبة ضريبة القيمة المضافة</label>
                                    <select name="Rate_VAT" id="Rate_VAT" class="form-control custom-select" onchange="myFunction()">
                                        <option value="" selected disabled>حدد النسبة</option>
                                        <option value="5">5%</option>
                                        <option value="10">10%</option>
                                        <option value="15">15%</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- Section 4: Totals --}}
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">قيمة ضريبة القيمة المضافة</label>
                                    <input type="text" class="form-control border-info" id="Value_VAT" name="Value_VAT" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">الاجمالي شامل الضريبة</label>
                                    <input type="text" class="form-control border-primary bg-primary-transparent font-weight-bold" id="Total" name="Total" readonly>
                                </div>
                            </div>
                        </div>

                        {{-- Section 5: Notes & Attachments --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="font-weight-bold">ملاحظات إضافية</label>
                                    <textarea class="form-control" name="note" rows="3" placeholder="أدخل ملاحظاتك هنا..."></textarea>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <h6 class="card-title mb-2"><i class="fas fa-paperclip ml-1"></i> المرفقات</h6>
                                <p class="text-muted small">الصيغ المسموحة: <span class="badge badge-secondary">PDF, JPEG, JPG, PNG</span></p>
                                <div class="form-group">
                                    <input type="file" name="pic" class="dropify" 
                                           accept=".pdf,.jpg, .png, image/jpeg, image/png" data-height="120" />
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-main-primary btn-lg px-5 shadow">
                                <i class="fas fa-save ml-1"></i> حفظ بيانات الفاتورة
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

@section('js')
    <!-- Internal JS Scripts (Stay the same) -->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

    <script>
        // Initialize Datepicker
        $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        });

        // AJAX for Loading Products
        $(document).ready(function() {
            $('select[name="Section"]').on('change', function() {
                var SectionId = $(this).val();
                if (SectionId) {
                    $.ajax({
                        url: "{{ URL::to('section') }}/" + SectionId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="product"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="product"]').append('<option value="' + value + '">' + value + '</option>');
                            });
                        },
                    });
                }
            });
        });

        // VAT & Total Calculations
        function myFunction() {
            var Amount_Commission = parseFloat(document.getElementById("Amount_Commission").value);
            var Discount = parseFloat(document.getElementById("Discount").value) || 0;
            var Rate_VAT = parseFloat(document.getElementById("Rate_VAT").value);

            if (!Amount_Commission) {
                alert('يرجى إدخال مبلغ العمولة أولاً');
                document.getElementById("Rate_VAT").value = "";
            } else {
                var Amount_Commission_After_Discount = Amount_Commission - Discount;
                var Vat_Value = (Amount_Commission_After_Discount * Rate_VAT) / 100;
                var Total_With_Vat = Amount_Commission_After_Discount + Vat_Value;

                document.getElementById("Value_VAT").value = Vat_Value.toFixed(2);
                document.getElementById("Total").value = Total_With_Vat.toFixed(2);
            }
        }
    </script>
@endsection
