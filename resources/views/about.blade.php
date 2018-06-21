@extends('layouts.app')

@section('content')

<div class="team-section">
    <h1> Our Team </h1>
    <span class="border"></span>
<div class="ps">
    <a href="#p1"><img src="image/team/photo1.png" class="photo" alt=""></a>
    <a href="#p2"><img src="image/team/photo2.png" class="photo" alt=""></a>
    <a href="#p3"><img src="image/team/photo3.png" class="photo" alt=""></a>
    <a href="#p4"><img src="image/team/photo4.png" class="photo" alt=""></a>
    <a href="#p5"><img src="image/team/photo5.png" class="photo" alt=""></a>
</div>

<!-- Each Team Member -->
<div class="section" id="p1">
    <span class="name">Remy Buitenkamp</span>
    <span class="border"></span>
    <p> My name is Remy Buitenkamp. I am from The Netherlands and I came to Denmark to study here for one semester. At my home university I finished a bachelor degree of Electrical Engineering. I then started a new bachelor degree in IT, because I want to combine my electrical knowledge with IT/programming. My IT knowledge is really general (I have had classes in programming, networking, infrastructure, databases and computer architecture). In Denmark I mostly study courses that include programming, such as C# and Website Development, because I want to further improve this. This project about making a professional website will definitely help to develop my skills in IT. </p>
</div>

<div class="section" id="p2">
    <span class="name">Loris Anyaegbunam</span>
    <span class="border"></span>
    <p> My name is Loris K. and I come from Italy. I’m a student in “Economics and Accountancy” at the University of Piemonte Orientale in Italy (second semester) while here I’m under “GBE” classes. My biggest challenge was learn how to switch from theoretical parts to pratial ones. Like a lot of new students here in Denmark at the very beginning of this semester i found very difficult to understand the name of the producuts at supermarkets and the prices too. This is why i was really happy and enthusiast when we decided to create Affordable Food Horsens. I hope that you will enjoy, and find useful too our website! </p>
</div>

<div class="section" id="p3">
    <span class="name">Mathieu Ponthoreau</span>
    <span class="border"></span>
    <p> My name is Mathieu Ponthoreau and I come from France. I’m a student in the course “Informatics and networks” in Angers. My goal with this website was to learn how to work with a technology that was new to me and I’m happy that we did it !  </p>
</div>

<div class="section" id="p4">
    <span class="name">Mathieu Montgoméry</span>
    <span class="border"></span>
    <p> My name is Mathieu and I come from France. I am studying “Information Communication and Technology” in the 4th semester in France. I really liked learning new things for this project, it is my first big website I have done in a team! </p>
</div>

<div class="section" id="p5">
    <span class="name">Laura Hafeneger</span>
    <span class="border"></span>
    <p> My name is Laura and i am living in Germany. I am studying “International Marketing” in the sixth semester in the Netherlands. My biggest challenge was the understanding of all the IT-things...I hope that we have created a useful website for you! </p>
</div>
<!-- Each Team Member -->

</div>


@endsection