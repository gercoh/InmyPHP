# InmyPHP
у меня вPHP
Написать функцию balance(string $r, string $l), которая сравнит две строки.
Строки состоят из восклицательных ('!') и вопросительных знаков ('?'). Восклицательный весит 2 пункта, вопросительный - 3.
Результат функции должен быть один из трёх вариантов - "Left", "Right" или "Balance", в зависимости от того, какая сторона тяжелее. 
Примеры результатов:
balance("!!","??") == "Right"
balance("!??","?!!") == "Left"
balance("!?!!","?!?") == "Left"
balance("!!???!????","??!!?!!!!!!!") == "Balance"
Писать несколько вариантов задачи не нужно, напишите самый лучший на Ваш взгляд.


===============================================================================
Mysql
Есть несколько таблиц. 
Таблица product, которая содержит id_product товара как первичный ключ (AI) и столбец id_category_default - категория по умолчанию.
id_product   |   id_category_default
____________________________________
3521		 |   140
3526		 |	 230

Также есть таблица category, содержащая id_category как первичный ключ (AI) и столбец kind(varchar) - тип категории.

id_category  | 	 kind
____________________________________
140			 |	 serie
230			 |	 brand

Таблица category_product, содержит связи между id_category и id_product. Не содержит первичного ключа.
id_product   |   id_category
_____________________________________
3521         |   140
3521         |   230
3526         |   140
3526         |   230
Суть задачи - написать один запрос, который проставит в таблице product те айдишники категорий, у которых тип категории - serie.


=================================================================================

Jquery
Есть форма с полем email для подписки на рассылку. Написать скрипт, который будет отправлять данные 
указанному php скрипту данные в json формате и в зависимости от ответа выдавать
то или иное сообщение в тело формы в div с классом response.

Папка Jquery
=========================================
$variable = 0;
if($variable){
    echo '0';
}else{
    echo '1';
}

if(isset($variable)){
    echo '0';
}else{
    echo '1';
}

if(empty($variable)){
    echo '0';
}else{
    echo '1';
}


// Что будет напечатано? 

____________________________________________

Написать класс Cat, который наследуется от класcа Animal. Класс Animal имеет метод getName (name можно передать в конструктор). Класс Cat имеет метод meow (возвращает строку «Cat {catname} is sayig meow».
Пример использования:
$cat = new Cat (’garfield’);
$cat->getName () === ’garfield’ // true;
$cat->meow () === ’Cat garfield is saying meow’ // true;



__________________________________






