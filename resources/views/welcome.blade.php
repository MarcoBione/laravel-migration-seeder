@extends('layouts.app')

@section('maincontent')
    <main class="py-3">
        <table class="table container table-fixed">
            <colgroup>
                <col style="width: 18%;">
                <col style="width: 18%;">
                <col style="width: 18%;">
                <col style="width: 18%;">
                <col style="width: 18%;">
                <col style="width: 18%;">
                <col style="width: 18%;">
            </colgroup>
            <thead>
                <tr>
                    <th scope="col ">N° Treno</th>
                    <th scope="col ">Compagnia</th>
                    <th scope="col ">Partenza</th>
                    <th scope="col ">Arrivo</th>
                    <th scope="col ">N° Carrozze</th>
                    <th scope="col ">Ritardo</th>
                    <th scope="col ">Cancellato</th>
                </tr>
            </thead>
            @foreach ($trains as $train)
                <tbody>
                    <tr>
                        <th scope="row">{{ $train->train_code }}</th>
                        <td scope="row">{{ $train->company }}</td>
                        <td scope="row">{{ $train->departure }}</td>
                        <td scope="row">{{ $train->arrival }}</td>
                        <td scope="row">{{ $train->carriages }}</td>
                        <td scope="row">
                            @if ($train->status === 1)
                                <p>in orario</p>
                            @elseif ($train->drop === 1)
                                <p>/</p>
                            @else
                                <p>in ritardo</p>
                            @endif
                        </td>
                        <td scope="row">
                            @if ($train->drop === 1)
                                <p>Cancellato</p>
                            @else
                                <p>/</p>
                            @endif
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>


    </main>
@endsection
