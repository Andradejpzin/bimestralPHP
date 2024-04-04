<?php
 function print_helloword(){echo"Hello Word";} 
 print_helloword();
 ?>
 
 <?php

 function print_helloword_name($name)
 {
    echo "Hello, $name!/n";
 }

 print_helloword("Nome Recebido");
 ?>

<?php
$alunos =["alice","bob","charlie","david","Eve"];

echo "Há" . count($alunos) . "nomes no array.";
?>

<?php
print_positive_and_negative_number()(numbers);
 positive_numbers = [num for num in numbers if num > 0]
    negative_numbers = [num for num in numbers if num < 0]

    print("numeros positivos:{positive_numbers}")
    print("numeros negativos:{negative_numbers}")

    numbers = [1, -2, 3, -4, 5, -6, 7, -8, 9, 10]

    print_positive_and_negative_number(numbers)

?>
<?php 
$aluno = array("nome" => "Mateus", "idade" => 16,"cursoTecnico" => "informatica");

foreach ($aluno as $atributo => $valor) {
    echo "$atributo : $valor \n";
}
?>

<?php
    function check_age_status($estudante){
        $idade = $estudante ["idade"] ?? 0;

        if $idade = $estudante< 18 {
            echo "Voce tem menos de 18 anos \n "  

        }else {
            echo "voce tem mais de 18"
    }
    $aluno = [ "nome" => "Mateus",
    "idade" => 16,
    "cursotecnico" =>"informatica"];

    check_age_status($aluno);
?>
<?php
function filter_coursers_with_value($courses,$key,$value) {
    $filtered_courses = [];

    foreach ($courses as $cousers) {
        if (isset($course[$key]) && $course[$key] === $value) {
            filtered_courses[] = $course;
        }
    }
}
foreach ($filtered_courses as $filtered_course){
    echo "Curso: " . $filtered_course['nome'] ."(Curso Tecnico: " . $filtered_course ['cursoTecnico'] .  ")\n";

}
$courses_array = [["cursoTecnico" => "informatica", "nome" => "Curso A"],
$courses_array = ["cursoTecnico" => "informatica", "nome" => "Curso B"],
$courses_array = ["cursoTecnico" => "informatica", "nome" => "Curso C"],
$courses_array = ["cursoTecnico" => "informatica", "nome" => "Curso D"],
];

filter_coursers_with_value($courses_array , "cursotecnico", "informatica");
?> 
