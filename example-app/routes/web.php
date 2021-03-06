<?php
use App\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/insert', function () {
    DB::insert("insert into Students(name,date_of_birth,GPA,advisor)values('Almas','2001-03-15',3.41,'Marzhan')");
});
 
Route::get('/select' , function (){
    $results=DB::select('select * from Students where id=?',[1]);
    foreach($results as $Students)
    {
        echo "name is :".$Students->name;
        echo "<br>";
        echo "date_of_birth is :".$Students->date_of_birth;
        echo "<br>";
        echo "GPA is :".$Students->GPA;
        echo "<br>";
        echo "advisor is :".$Students->advisor;
    }
});

Route::get('/update', function() {
    $update=DB::update('update Students set name="Bekzat" where id=?', [1]);
    return $update;
});

Route::get('/delete', function() {
    $deleted=DB::delete('delete from Students where id=?', [2]);
    return $deleted;
});


Route::get('/insert2', function(){
$Student=new Student;
$Student->name='Arman';
$Student->date_of_birth='2000-05-12';
$Student->GPA=4.0;
$Student->advisor='Damir';
$Student->save();   
});

Route::get('/update2', function(){
$Student=Student::find(2);
$Student->name='Ulan';
$Student->date_of_birth='2003-08-22';
$Student->GPA=4.0;
$Student->advisor='Marzhan';
$Student->save();   
 });

Route::get('/delete2', function(){
$Student=Student::find(1);
$Student->delete();
});




