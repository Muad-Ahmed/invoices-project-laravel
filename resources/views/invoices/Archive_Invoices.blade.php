@section('content')

    @if (session()->has('archive_invoice'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم أرشفة الفاتورة بنجاح",
                    type: "success"
                })
            }
        </script>
    @endif

    @if (session()->has('delete_invoice'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم حذف الفاتورة بنجاح",
                    type: "success"
                })
            }
        </script>
    @endif

    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class="m-0 font-weight-bold text-primary">قائمة أرشيف الفواتير</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-hover table-striped dt-responsive nowrap" style="width:100%" data-page-length='50'>
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">رقم الفاتورة</th>
                                    <th class="border-bottom-0">تاريخ الفاتورة</th>
                                    <th class="border-bottom-0">تاريخ الاستحقاق</th>
                                    <th class="border-bottom-0">المنتج</th>
                                    <th class="border-bottom-0">القسم</th>
                                    <th class="border-bottom-0">الخصم</th>
                                    <th class="border-bottom-0">نسبة الضريبة</th>
                                    <th class="border-bottom-0">قيمة الضريبة</th>
                                    <th class="border-bottom-0">الاجمالي</th>
                                    <th class="border-bottom-0">الحالة</th>
                                    <th class="border-bottom-0">ملاحظات</th>
                                    <th class="border-bottom-0">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach ($invoices as $invoice)
                                    @php $i++; @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td class="font-weight-bold text-primary">{{ $invoice->invoice_number }}</td>
                                        <td>{{ $invoice->invoice_Date }}</td>
                                        <td>{{ $invoice->Due_date }}</td>
                                        <td>{{ $invoice->product }}</td>
                                        <td>
                                            <a href="{{ url('InvoicesDetails') }}/{{ $invoice->id }}" class="text-info font-weight-600">
                                                {{ $invoice->section->section_name }}
                                            </a>
                                        </td>
                                        <td><span class="text-danger font-weight-bold">{{ number_format($invoice->Discount, 2) }}</span></td>
                                        <td>{{ $invoice->Rate_VAT }}</td>
                                        <td>{{ number_format($invoice->Value_VAT, 2) }}</td>
                                        <td class="text-dark font-weight-bold">{{ number_format($invoice->Total, 2) }}</td>
                                        <td>
                                            @if ($invoice->Value_Status == 1)
                                                <span class="badge badge-pill badge-success-light">
                                                    <i class="dot-label bg-success ml-1"></i>{{ $invoice->Status }}
                                                </span>
                                            @elseif($invoice->Value_Status == 2)
                                                <span class="badge badge-pill badge-danger-light">
                                                    <i class="dot-label bg-danger ml-1"></i>{{ $invoice->Status }}
                                                </span>
                                            @else
                                                <span class="badge badge-pill badge-warning-light">
                                                    <i class="dot-label bg-warning ml-1"></i>{{ $invoice->Status }}
                                                </span>
                                            @endif
                                        </td>
                                        <td>{{ Str::limit($invoice->note, 20) }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-outline-primary btn-sm" data-toggle="dropdown"
                                                    type="button">الإجراءات <i class="fas fa-chevron-down mr-1"></i></button>
                                                <div class="dropdown-menu shadow animate slideIn">
                                                    <a class="dropdown-item" href="#"
                                                        data-invoice_id="{{ $invoice->id }}" data-toggle="modal"
                                                        data-target="#Transfer_invoice">
                                                        <i class="text-warning fas fa-history ml-2"></i>إلغاء الأرشفة
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#"
                                                        data-invoice_id="{{ $invoice->id }}" data-toggle="modal"
                                                        data-target="#delete_invoice">
                                                        <i class="fas fa-trash-alt ml-2"></i>حذف الفاتورة
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


**هل تريد مني أيضاً تعديل شكل الـ Modals (نوافذ التأكيد) لتكون متناسقة مع هذا التصميم الجديد؟**
