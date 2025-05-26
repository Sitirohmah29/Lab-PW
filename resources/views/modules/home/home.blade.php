@extends('templates.layouts')


    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


@section('content')
    <!-- Header -->
    <div class="d-flex align-items-center p-3 my-3 text-white bg-danger rounded shadow-sm">
        <img class="me-3"
             src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/LOGO_IBIK.png/1200px-LOGO_IBIK.png"
             alt="icon-ibik" width="45" height="45">
        <div class="lh-1">
            <h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
            <small>Since 2011</small>
        </div>
    </div>

    <!-- Main Card -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $data['title'] }}</h3>
        </div>
        <div class="card-body">
            <p>NPM {{ $data['npm'] }} termasuk bilangan 
                @if ($data['npm'] % 2 == 0)
                    <span class="text-primary">GENAP</span>
                @else
                    <span class="text-info">GANJIL</span>
                @endif
            </p>

            <!-- Skills Section -->
            <div class="skills">
                <h4 class="text-uppercase">Skill:</h4>

                <!-- PHP Skill -->
                <div class="d-flex flex-row justify-content-between">
                    <p class="text-dark">PHP</p>
                    <div>
                        @for ($i = 0; $i < 5; $i++)
                            <span class="me-1 text-warning">
                                <i class="bi bi-star-fill"></i>
                            </span>
                        @endfor
                    </div>
                </div>

                <!-- Java Skill -->
                <div class="d-flex flex-row justify-content-between">
                    <p class="text-dark">JAVA</p>
                    <div>
                        @for ($i = 0; $i < 5; $i++)
                            <span class="me-1 text-warning">
                                <i class="bi bi-star{{ $i > 2 ? '-fill' : '' }}"></i>
                            </span>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Student Table -->
            <div class="mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NPM</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['students'] as $index => $result)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $result['npm'] }}</td>
                                <td>{{ $result['name'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
