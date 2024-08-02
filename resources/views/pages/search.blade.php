@extends('layouts.app') @section('content')
<!-- Search form input -->
<div class="form-search-page">
	<h2 class="mt-3">
		Search Database
	</h2>
	<form class="form-search-input" action="{{route('searchResult')}}" method="GET">
		<div class="">
			<input name="searchName" class="" placeholder="Vessel Name" />
			<input class="" placeholder="Owner Name" />
		</div>
		<div class="">
			<input name="searchAMSAUVI" class="" placeholder="AMSA UVI" />
			<input class="" placeholder="" />
		</div>
		<div class="form-search-button">
			<button type="reset" class="button-reset">
				<svg class="" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
					<path
						d="M5.50506 11.4096L6.03539 11.9399L5.50506 11.4096ZM3 14.9522H2.25H3ZM9.04776 21V21.75V21ZM11.4096 5.50506L10.8792 4.97473L11.4096 5.50506ZM17.9646 12.0601L12.0601 17.9646L13.1208 19.0253L19.0253 13.1208L17.9646 12.0601ZM6.03539 11.9399L11.9399 6.03539L10.8792 4.97473L4.97473 10.8792L6.03539 11.9399ZM6.03539 17.9646C5.18538 17.1146 4.60235 16.5293 4.22253 16.0315C3.85592 15.551 3.75 15.2411 3.75 14.9522H2.25C2.25 15.701 2.56159 16.3274 3.03 16.9414C3.48521 17.538 4.1547 18.2052 4.97473 19.0253L6.03539 17.9646ZM4.97473 10.8792C4.1547 11.6993 3.48521 12.3665 3.03 12.9631C2.56159 13.577 2.25 14.2035 2.25 14.9522H3.75C3.75 14.6633 3.85592 14.3535 4.22253 13.873C4.60235 13.3752 5.18538 12.7899 6.03539 11.9399L4.97473 10.8792ZM12.0601 17.9646C11.2101 18.8146 10.6248 19.3977 10.127 19.7775C9.64651 20.1441 9.33665 20.25 9.04776 20.25V21.75C9.79649 21.75 10.423 21.4384 11.0369 20.97C11.6335 20.5148 12.3008 19.8453 13.1208 19.0253L12.0601 17.9646ZM4.97473 19.0253C5.79476 19.8453 6.46201 20.5148 7.05863 20.97C7.67256 21.4384 8.29902 21.75 9.04776 21.75V20.25C8.75886 20.25 8.449 20.1441 7.9685 19.7775C7.47069 19.3977 6.88541 18.8146 6.03539 17.9646L4.97473 19.0253ZM17.9646 6.03539C18.8146 6.88541 19.3977 7.47069 19.7775 7.9685C20.1441 8.449 20.25 8.75886 20.25 9.04776H21.75C21.75 8.29902 21.4384 7.67256 20.97 7.05863C20.5148 6.46201 19.8453 5.79476 19.0253 4.97473L17.9646 6.03539ZM19.0253 13.1208C19.8453 12.3008 20.5148 11.6335 20.97 11.0369C21.4384 10.423 21.75 9.79649 21.75 9.04776H20.25C20.25 9.33665 20.1441 9.64651 19.7775 10.127C19.3977 10.6248 18.8146 11.2101 17.9646 12.0601L19.0253 13.1208ZM19.0253 4.97473C18.2052 4.1547 17.538 3.48521 16.9414 3.03C16.3274 2.56159 15.701 2.25 14.9522 2.25V3.75C15.2411 3.75 15.551 3.85592 16.0315 4.22253C16.5293 4.60235 17.1146 5.18538 17.9646 6.03539L19.0253 4.97473ZM11.9399 6.03539C12.7899 5.18538 13.3752 4.60235 13.873 4.22253C14.3535 3.85592 14.6633 3.75 14.9522 3.75V2.25C14.2035 2.25 13.577 2.56159 12.9631 3.03C12.3665 3.48521 11.6993 4.1547 10.8792 4.97473L11.9399 6.03539Z"
						fill="#fff"
					/>
					<path
						opacity="0.5"
						d="M13.2411 17.8444C13.534 18.1372 14.0089 18.1372 14.3018 17.8444C14.5946 17.5515 14.5946 17.0766 14.3018 16.7837L13.2411 17.8444ZM7.21637 9.69831C6.92347 9.40541 6.4486 9.40541 6.15571 9.69831C5.86281 9.9912 5.86281 10.4661 6.15571 10.759L7.21637 9.69831ZM14.3018 16.7837L7.21637 9.69831L6.15571 10.759L13.2411 17.8444L14.3018 16.7837Z"
						fill="#fff"
					/>
					<path opacity="0.5" d="M9 21H21" stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
				</svg>
				CLEAR
			</button>
			<button type="submit" class="button-search">
				<svg class="" width="18px" height="18px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
				</svg>

				SEARCH
			</button>
		</div>
	</form>
</div>

<!-- Table search resut -->
<div class="table-search-result mt-5">
	<form action="{{url('export-csv')}}" method="POST" class="">
		@csrf
		<button type="submit" class="export-excel">
			Export Excel
		</button>
	</form>
	<table class="table">
		<thead class="table-dark">
			<tr>
				<th>#</th>
				<th>Vessel Name</th>
				<th>AMSA UVI</th>
				<th>Company</th>
				<th>Cos Expiry Date</th>
				<th>Coo Expiry Date</th>
				<th>Equipment Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1 ?>
			@foreach($vessels as $key => $vessel) @if($vessel->company->id == Auth::user()->company->id)
			<tr class="">
				<th>
					{{$i}}
				</th>
				<td class="">
					<a href="{{route('customer.show', $vessel->id)}}" class="text-decoration-none">{{$vessel->name}}</a>
				</td>
				<td class="">{{$vessel->amsa_uvi}}</td>
				<td class="">{{$vessel->company->name}}</td>
				<td class="">
					@if($vessel->cos_expiry_date <= $now)
					<span class="text-danger" style="color: red">
						{{$vessel->cos_expiry_date}}
					</span>
					@else
					<span>
						{{$vessel->cos_expiry_date}}
					</span>
					@endif
				</td>
				<td class="">
					@if($vessel->coo_expiry_date <= $now)
					<span class="text-danger" style="color: red">
						{{$vessel->coo_expiry_date}}
					</span>
					@else
					<span>
						{{$vessel->coo_expiry_date}}
					</span>
					@endif
				</td>
				<td class="">
					@if( $vessel->class_cert_expiry_date <= $now || $vessel->trailer_reg_expiry_date <= $now || $vessel->rcd_test_expiry_date <= $now || $vessel->megger_test_expiry_date <= $now || $vessel->ecoc_expiry_date <= $now ||
					$vessel->gas_coc_expiry_date <= $now )
					<span class="text-danger" style="color: red; font-weight: bold">Out of date</span>
					@elseif( $vessel->class_cert_expiry_date > $now && $vessel->class_cert_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || $vessel->trailer_reg_expiry_date > $now && $vessel->trailer_reg_expiry_date <=
					date('Y-m-d', strtotime($now. '+90days')) || $vessel->rcd_test_expiry_date > $now && $vessel->rcd_test_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || $vessel->megger_test_expiry_date > $now &&
					$vessel->megger_test_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || $vessel->ecoc_expiry_date > $now && $vessel->ecoc_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || $vessel->gas_coc_expiry_date
					> $now && $vessel->gas_coc_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) )
					<span class="text-warning" style="color: yellow; font-weight: bold">Duc soon</span>
					@else
					<span class="text-success" style="color: green; font-weight: bold">Current</span>
					@endif
				</td>
			</tr>
			<?php $i++ ?>
			@endif @endforeach
		</tbody>
	</table>
</div>
<style>
	.form-search-page{
	    border: 1px solid #ccc;
	    width: 55%;
	    padding-bottom: 60px;
	    display: flex;
	    flex-direction: column;
	    align-items: center;
	    justify-content: center;
	    gap: 5px;
	}

	.form-search-input{
	    display: flex;
	    flex-direction: column;
	    gap: 35px;
	    width: 100%;
	    position: relative;
	}

	.form-search-input div:first-child, .form-search-input div:nth-child(2){
	    display: flex;
	    flex-direction: row;
	    justify-content: center;
	    gap: 50px;
	}

	.form-search-input div:nth-child(2) input:nth-child(2){
	    border: none;
	}

	.form-search-input div input{
	    width: 45%;
	    color: rgba(46, 45, 45, 0.8);
	}

	.form-search-button{
	    display: flex;
	    flex-direction: row;
	    justify-content: end;
	    gap: 10px;
	    padding: 10px 15px;
	    position: absolute;
	    top: 63%;
	    left: 55%;
	}

	.form-search-button button{
	    display: flex;
	    flex-direction: row;
	    justify-content: center;
	    align-items: center;
	    gap: 5px;
	    padding: 10px 20px;
	    font-size: 14px;
	    color: #fff;
	}

	.form-search-button .button-reset{
	    background-color: rgba(51, 47, 46, 1);
	}

	.form-search-button .button-search{
	    background-color: rgba(0, 41, 85, 1);
	}

    .table-search-result{
        width: 100%;
        padding-right: 20px;
    }

    .table-search-result .export-excel{
        color: #fff;
        padding: 10px 20px;
	    font-size: 14px;
        background-color: rgba(0, 41, 85, 1);
    }

    .form-search-button .button-search:hover, .table-search-result .export-excel:hover{
        background-color: rgba(0, 41, 85, 0.9);
    }

    .table-search-result table{
        margin-top: 8px;
        width: 100%;
        padding-right: 20px;
        cursor: pointer;
    }

    .table-search-result table tbody tr:hover {
        background-color: rgba(204, 204, 204, 0.3);
    }

    @media (max-width: 960px){
        .form-search-page{
            padding-left: 10px;
            padding-right: 10px;
        }

        .form-search-button{
            right: 0%;
        }

        .form-search-button button{
            font-size: 12px;
        }
    }

    @media (max-width: 860px){
        .form-search-input{
            gap: 25px;
        }

        .form-search-input div:first-child, .form-search-input div:nth-child(2){
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
        }

        .form-search-input div input{
            width: 85%;
        }

        .form-search-button{
            top: 90%;
            left: 50%;
            transform: translate(-40%, 0);
        }
    }

    @media (max-width: 768px){
        .form-search-page h2{
            font-size: 20px;
        }

        .form-search-button{
            transform: translate(-30%, 0);
        }

        .form-search-button button{
            font-size: 10px;
        }

		.table-search-result table{
			font-size: 14px;
		}
    }

    @media (max-width: 574px){
        .form-search-button{
            transform: translate(-24%, 0);
        }

        .form-search-button button{
            padding: 8px 12px;
        }

		.table-search-result table{
			font-size: 12px;
		}
    }

    @media (max-width: 480px){
        .form-search-button{
            transform: translate(-9%, 0);
        }

        .form-search-button button{
            font-size: 8px;
        }
    }

	@media (max-width: 365px){
		.form-search-button{
			top: 80%;
            left: 90%;
        }

		.table-search-result table{
			margin-left: 2px;
			font-size: 9px;
		}
    }
</style>
@endsection
