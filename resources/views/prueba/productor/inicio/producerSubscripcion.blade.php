<h1>Subscripcion</h1>

@foreach($students_subscriptions as $student_subscription)

    <a href="subscripcion?id={{$student_subscription->id}}">{{ $student_subscription->name }}</a> <br><br>

@endforeach

<hr>

<h1>Cursos</h1>
@foreach($students_courses as $student_course)
    <table border="1" width="100">
        <tr>
            <th>
                <img src="https://picsum.photos/300/200">
            </th>
        </tr>
        <tr>
            <th>{{ $student_course->title }}</th>
        </tr>
        <tr>
            <td>{{ $student_course->description }}</td>
        </tr>
        <tr>
            <td>{{ $student_course->name }} | S/. {{ $student_course->price }}</td>
        </tr>
    </table>
    <br>
@endforeach
