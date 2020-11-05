@extends('layouts.master')
@section('title', 'LEONARDO DA VINICE')
@section('header')
PINTOR
@stop
@section('navbar')
@show
@section('contenido')
<h1>LEONARDO DA VINCI</h1>
    <div class="contenedor">
        <p>Pintor, inventor, escultor, arquitecto, ingeniero, astrónomo... Clasificar al italiano Leonardo da Vinci es una sola disciplina es una tarea imposible. Su figura encarna perfectamente el ideal del hombre del Renacimiento, y su expresión derivada como sinónimo de polímatía, o sabiduría aplicada a diversos campos del arte y de la ciencia. Como inventor dejó trazadas las ideas de lo que luego serían dispositivos y aparatos tan dispares como el paracaídas, el helicóptero y el tanque, aunque el nivel tecnológico de su época hizo imposible que los viera convertidos en realidad. Sin duda, su legado más universal está en el campo de la pintura. Obras magnas como La última cena o La dama del armiño han quedado relativamente eclipsadas por la dimensión de su cuadro más famoso: la Mona Lisa, o Gioconda, expuesta en el museo del Louvre de París y convertida en un auténtico icono popular. </p>
    </div>
    <table width="100%" border="0" cellpadding="1">
        <tr>
            <td>
                <a><img src="https://www.biografiasyvidas.com/monografia/leonardo/fotos/leonardo_7.jpg" alt="MONA LISA" width="210px" height="220px"/><br>LA MONA LISA</a>
            </td>
            <td>
                <a><img src="https://miro.medium.com/max/4262/1*524awpRxVN2VJKgQ7LWGLg.jpeg" alt="HOMBRE VITRUVIO" width="210px" height="220px"/><br>HOMBRE VITRUVIO</a>
            </td>
            <td>
                <a><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSJZH0AxNTMH7Jxdf3K5pu6pCGvf0QlFeU1wQ&usqp=CAU" alt="LEOARDO DA VINCI" width="210px" height="220px"/><br>DA VINCI</a>
            </td>
            <td>
                <a><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ13nhA28jlNyIRnyTSm6YCpknmi8REZ42vKw&usqp=CAU" alt="LA ULTIMA CENA" width="210px" height="220px"/><br>LA ULTIMA CENA</a>
            </td>
            <td>
                <a><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSGgbUzxen0w0zEI_IvHgvSPLDyTESTk8vD3w&usqp=CAU" alt="AMANTES" width="210px" height="220px"/><br>Salomé con La Cabeza <br> De San Juan Bautista</a>
            </td>
        </tr>
    <table>
        <br><hr>
        @stop
@section('footer')
@parent
@stop