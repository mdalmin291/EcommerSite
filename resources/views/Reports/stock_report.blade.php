@extends('layouts.backend_app')
@section('content')
<div>
    <x-slot name="title">
        Stock Report
    </x-slot>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="search-box mr-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <h4 class="card-title design_title">Stock Report</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div wire:ignore class="form-group">
                                        <label for="basicpill-firstname-input">Select Item</label>
                                        <select class="form-control form-select select2 updateTable"
                                            placeholder="Item" name="item_id" id="item_id">
                                            <option value="">Select Item</option>
                                            @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div wire:ignore class="form-group">
                                        <label for="basicpill-firstname-input">Select Category</label>
                                        <select class="form-control form-select select2 updateTable"
                                            placeholder="Category" name="category_id" id="category_id">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div wire:ignore class="form-group">
                                        <label for="basicpill-firstname-input">Select Branch</label>
                                        <select class="form-control form-select select2 updateTable"
                                            placeholder="Branch" name="branch_id" id="branch_id">
                                            <option value="">Select Branch</option>
                                            @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="stock_report_table" class="table table-striped table-bordered nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tfoot>
                                <th colspan="4"></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
		$('#contact_id').select2(
            {theme: "classic"}
        );

		$('#stock_report_table').DataTable({
			processing: true,
			responsive: true,
			serverSide: true,
			ajax: {
				url: "{{ route('report.stock-report-data') }}",
				type: 'GET',
				cache: false,
				data : function ( d ) {
					d.item_type = $('#item_type').val();
					d.item_id = $('#item_id').val();
					d.category_id = $('#category_id').val();
					d.branch_id = $('#branch_id').val();
				}
			},
			columns: [
			{ title: 'SL', data: 'id', name: 'id' },
			{ title: 'Category', data: 'category_id', name: 'category_id' },
			{ title: 'Code', data: 'code', name: 'code' },
			{ title: 'Item Name', data: 'name', name: 'name' },
			{ title: 'Stock', data: 'current_stock', class: "current_stock", name: 'current_stock' },
            { title: 'Amount', data: 'regular_price', class: "regular_price", name: 'regular_price' },
			{ title: 'Total', data: 'total', class: "total", name: 'total' }
			],
			dom: '<"html5buttons"B>lTfgitp',
			buttons: [
			'copyHtml5',
			'csvHtml5',
            // 'excel',
			{extend: 'excelHtml5', title: '{{$companyInfo->name}} \n {{$companyInfo->address}} \n Stock Report',  footer:true,
				exportOptions:{
					columns: ":not(.not-show)"
				},
			},
			{extend: 'pdfHtml5', title: '{{$companyInfo->business_name}} \n {{$companyInfo->address}} \n Stock Report', orientation: 'landscape', pageSize: 'LEGAL', footer:true,
				exportOptions:{
					charset: "utf-8",
					columns: ":not(.not-show)"
				},
				customize: function (doc) {
					doc.content[1].table.widths =
					Array(doc.content[1].table.body[0].length + 1).join('*').split('');
					doc.styles.tableFooter.alignment = 'center';
					doc.styles.tableBodyEven.alignment = 'center';
					doc.styles.tableBodyOdd.alignment = 'center';
				}
			}
			],
			footerCallback: function(row, data, start, end, display) {
				var api = this.api();
				$.each(['current_stock', 'regular_price', 'total'], function( index, value ) {

					// var total = api
					// .column('.amount_to_pay', {
					// page: 'all'
					// })
					// .data()
					// .reduce( function (a, b) {
					// return parseFloat(a) + parseFloat(b);
					// }, 0 );

					api.columns('.'+value, {
						page: 'all'
						}).every(function() {
						var sum = this
						.data()
						.reduce(function(a, b) {

							if(!Number(a) && a != 0){
								a = a.replace(/\,/g,'');
							}

							if(!Number(b) && b != 0){
								b = b.replace(/\,/g,'');
							}
							var x = parseFloat(a) || 0;
							var y = parseFloat(b) || 0;
							return x + y;
						}, 0);

						$(this.footer()).html(parseFloat(sum).toFixed(2));
					});



				});

			},
			lengthMenu: [
			[10, 25, 50, 100],
			[10, 25, 50, 100]
			]
		});

		$(document).on('change','.updateTable',function () {
			$('#stock_report_table').DataTable().draw(true);
		});
	});
</script>
@endsection
