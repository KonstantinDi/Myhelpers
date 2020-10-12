/*Задался вопросом о реализации паттерна проектирование фабичный метод, не берусь утверждать что реализовал правильно,
но идея была в том чтобы возвращать объект через класс создающий этот объект(в данном случае объект сотрудника)/
*/
// класс кадровички которая находит новых сотрудников
class Cadrovichka
{
	public function findSotrynik($Sotrydnik,$title,$obyazannosti,$Salary): Sotrydnik
	{

		$Sotrydnik->title = $title;
		$Sotrydnik->obyazannosti = $obyazannosti;
		$Sotrydnik->Salary = $Salary;
		return $Sotrydnik;
	}
}

// класс сотрудника
class Sotrydnik
{
	public $title;
	public $obyazannosti;
	public $Salary;

	public function doWork()
	{
		echo 'Начать '.$this->obyazannosti;
	}

	public function takeSalary()
	{
		echo 'Получить зарплату в '.$this->Salary;
	}
}

// контроллер и экшен
class TestController extends Controller
{
	public function actionIndex()
	{
		$Cadrovichka = new Cadrovichka;
		$Saler = $Cadrovichka->findSotrynik(new Sotrydnik,'Булочник','Продавать будлочки','200 рублей в час');
		$Saler->doWork();
		echo '<br>';
		$Saler->takeSalary();
		echo '<br>';
	}
}
