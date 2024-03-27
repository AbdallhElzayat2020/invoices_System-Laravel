@extends('layouts.master')
@section('title')
    تفاصيل الفاتورة
@endsection
@section('css')
    <!---Internal  Prism css-->
    <link href="{{ URL::asset('assets/plugins/prism/prism.css') }}" rel="stylesheet">
    <!---Internal Input tags css-->
    <link href="{{ URL::asset('assets/plugins/inputtags/inputtags.css') }}" rel="stylesheet">
    <!--- Custom-scroll -->
    <link href="{{ URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">قائمة الفواتير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    تفاصيل الفاتورة</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <div class="row row-sm">
        <div class="col-xl-12">
            <!-- div -->
            <div class="card mg-b-20" id="tabs-style2">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        معلومات فاتورة رقم <span class="text-primary fw-bold">sdjkf</span>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-2">
                                <div class=" tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs main-nav-line">
                                            <li><a href="#tab4" class="nav-link active" data-toggle="tab">معلومات
                                                    الفاتورة</a>
                                            </li>
                                            <li><a href="#tab5" class="nav-link" data-toggle="tab">حالات الدفع</a></li>
                                            <li><a href="#tab6" class="nav-link" data-toggle="tab">المرفقات</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body main-content-body-right border">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab4">
                                            <table class="table table-striped" style="text-align:center">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">رقم الفاتورة</th>
                                                        <td>{{ $invoices->invoice_number }}</td>
                                                        <th scope="row">تاريخ الاصدار</th>
                                                        <td>{{ $invoices->invoice_Date }}</td>
                                                        <th scope="row">تاريخ الاستحقاق</th>
                                                        <td>{{ $invoices->Due_date }}</td>
                                                        <th scope="row">القسم</th>
                                                        <td>{{ $invoices->Section->section_name }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">المنتج</th>
                                                        <td>{{ $invoices->product }}</td>
                                                        <th scope="row">مبلغ التحصيل</th>
                                                        <td>{{ $invoices->Amount_collection }}</td>
                                                        <th scope="row">مبلغ العمولة</th>
                                                        <td>{{ $invoices->Amount_Commission }}</td>
                                                        <th scope="row">الخصم</th>
                                                        <td>{{ $invoices->Discount }}</td>
                                                    </tr>


                                                    <tr>
                                                        <th scope="row">نسبة الضريبة</th>
                                                        <td>{{ $invoices->Rate_VAT }}</td>
                                                        <th scope="row">قيمة الضريبة</th>
                                                        <td>{{ $invoices->Value_VAT }}</td>
                                                        <th scope="row">الاجمالي مع الضريبة</th>
                                                        <td>{{ $invoices->Total }}</td>
                                                        <th scope="row">الحالة الحالية</th>

                                                        @if ($invoices->Value_Status == 1)
                                                            <td><span
                                                                    class="badge badge-pill badge-success">{{ $invoices->Status }}</span>
                                                            </td>
                                                        @elseif($invoices->Value_Status == 2)
                                                            <td><span
                                                                    class="badge badge-pill badge-danger">{{ $invoices->Status }}</span>
                                                            </td>
                                                        @else
                                                            <td><span
                                                                    class="badge badge-pill badge-warning">{{ $invoices->Status }}</span>
                                                            </td>
                                                        @endif
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">ملاحظات</th>
                                                        <td>{{ $invoices->note }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab5">
                                            <p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
                                                corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                                                non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                                                id est laborum et dolorum fuga.</p>
                                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                                cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                                                maxime</p>
                                            <p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis
                                                dolor repellendus.</p>
                                        </div>
                                        <div class="tab-pane" id="tab6">
                                            <p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                                excepturi sint occaecati cupiditate non provident,</p>
                                            <p class="mb-0">similique sunt in culpa qui officia deserunt mollitia animi,
                                                id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                                expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
                                                cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis
                                                voluptas assumenda est, omnis dolor repellendus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Jquery.mCustomScrollbar js-->
    <script src="{{ URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- Internal Input tags js-->
    <script src="{{ URL::asset('assets/plugins/inputtags/inputtags.js') }}"></script>
    <!--- Tabs JS-->
    <script src="{{ URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
    <script src="{{ URL::asset('assets/js/tabs.js') }}"></script>
    <!--Internal  Clipboard js-->
    <script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/clipboard/clipboard.js') }}"></script>
    <!-- Internal Prism js-->
    <script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>
@endsection
