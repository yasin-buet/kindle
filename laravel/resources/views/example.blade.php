<!-- app/views/example.blade.php -->

@include ('header')

<h1>Dear Lord Otwell</h1>
<p>I hereby challenge you to a duel for the honour of Laravel.</p>

@{{ muhhhhhaaaahaaa }}

<p> {{{ '<script>alert(“CHUNKY BACON!”);</script>' }}}</p>


 <p1>for a equal 1</p1>


 @for ($i = 0; $i < 9; $i++)
    <p>Even {{ $i }} red pandas, aren't enough!</p>
@endfor


@include('footer')
