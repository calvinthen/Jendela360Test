

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<h2>list Car </h2>

@php
    $mobilCount = DB::table('mobils')->count();
    $mobils = DB::table('mobils')->get();
@endphp


@if ($mobilCount == 0)
    You don't have any car sale yet.

@elseif($mobilCount > 0)

    <table>
        <tr>
            <th>
                ID
            </th>

            <th>
                Nama
            </th>

            <th>
                Price
            </th>

            <th>
                Stock
            </th>

            <th>
                Action
            </th>

        </tr>



        @foreach ($mobils as $mobil)
            <tr>
                <td>
                    {{$mobil->id}}
                </td>

                <td>
                    {{$mobil->nama}}
                </td>

                <td>
                    <strong>Rp.</strong>{{$mobil->harga}}
                </td>

                <td>
                    {{$mobil->stock}}
                </td>
                <td>
                    <a href="{{route('mobil.edit',$mobil->id)}}" style="text-decoration: none">
                        <i class="fa fa-pencil-square-o" aria-hidden="true" style="color: orange"></i>
                    </a>

                    <a href="{{route('mobil.destroy',$mobil->id)}}" style="text-decoration: none">
                        <i class="fa fa-times" aria-hidden="true" style="color: red"></i>
                    </a>
                </td>
            </tr>
        @endforeach

    </table>

@endif

<br>
<button>
    <a href="{{route('mobil.store_index')}}">
        Add Cars
    </a>
</button>
