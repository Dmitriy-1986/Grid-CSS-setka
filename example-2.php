
<!DOCTYPE html>
<html>
<head>
<!-- Style -->
<style>
.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 5px;
grid-row-gap: 5px;
}

.div1 { grid-area: 1 / 1 / 3 / 3; }
.div2 { grid-area: 1 / 3 / 4 / 4; }
.div3 { grid-area: 1 / 4 / 2 / 6; }
.div4 { grid-area: 2 / 4 / 3 / 6; }
.div5 { grid-area: 3 / 4 / 5 / 6; }
.div6 { grid-area: 5 / 4 / 6 / 6; }
.div7 { grid-area: 3 / 1 / 4 / 2; }
.div8 { grid-area: 3 / 2 / 4 / 3; }
.div9 { grid-area: 4 / 2 / 5 / 3; }
.div10 { grid-area: 4 / 1 / 5 / 2; }
.div11 { grid-area: 5 / 1 / 6 / 3; }
.div12 { grid-area: 4 / 3 / 6 / 4; }

section {
    max-width: 1000px;
    margin: 0 auto;
}
div {
    padding: 30px;
    border: 1px solid grey ;
}
</style>

</head>
<body>

<section class="parent">
<div class="div1"> </div>
<div class="div2"> </div>
<div class="div3"> </div>
<div class="div4"> </div>
<div class="div5"> </div>
<div class="div6"> </div>
<div class="div7"> </div>
<div class="div8"> </div>
<div class="div9"> </div>
<div class="div10"> </div>
<div class="div11"> </div>
<div class="div12"> </div>
</section>

</body>
</html>


