<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title }} </title>
    {{-- <link rel="stylesheet" href="mydesign/mystyle.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @include('nav.navigation')

    <div class="container pt-5">
        <h1>Projects</h1><br>
        {{-- <table border="1"> --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Project</th>
                    <th>Course</th>
                    <th>Semester</th>
                    <th>Description</th>
                </tr>
            </thead>

            <tbody>

                {{-- Project List --}}
                @php($i = 0)

                @foreach ($projects as $pro)

                    @if (($i + 1) % 2 == 0)
                        @php($semester = 'EVEN')
                    @else
                        @php($semester = 'ODD')
                    @endif

                    <tr>
                        {{-- Number --}}
                        <td> {{ $i + 1 }} </td>

                        {{-- Project --}}
                        <td>
                            <a href="project/{{ $pro['code'] }}">
                                {{ $pro['title'] }}
                            </a>
                        </td>

                        {{-- Course --}}
                        <td> {{ $pro['course'] }} </td>

                        {{-- Semester --}}
                        <td> {{ $semester }} </td>

                        {{-- Description --}}
                        @if ($loop->first)
                            <td>My very FIRST project.</td>
                        @elseif ($loop->last)
                            <td>My LAST project.</td>
                        @else
                            <td>Lorem ipsum dolor sit amet.</td>
                        @endif

                    </tr>

                    @php($i++)
                @endforeach
            </tbody>

        </table>

        <br>
        <a href="/">back</a>
    </div>
</body>

</html>
