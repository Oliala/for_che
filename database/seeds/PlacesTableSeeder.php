<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('places')->insert([
//            'name' => 'Leo hostel',
//            'description' => 'ЛЕО – ДОСТУПНИЙ ХОСТЕЛ З НАТУРАЛЬНИМИ МЕБЛЯМИ
//Всіх гостей Чернігова гостинно запрошує доступний, але дуже комфортний хостел Лео.
//
//Хостел знаходиться в живописному районі міста, адже поряд Болдині гори, легендарні Антонієві печери та Троїцький собор з оглядовим майданчиком у дзвінниці.
//
//Для всіх гостей хостела:
//
//Комфортні номери 2, 4, 6 та 8 місні номери;
//Дизайнерський ремонт та регулярне прибирання;
//Ортопедичні матраци на ліжках з натурального дерева;
//Кафе-бар прямо в хостелі;
//Окремий сан-вузол у кожній кімнаті;
//WiFi
//Тут можна з комфортом переночувати, а також перекусити за символічну ціну.',
//            'address' => 'вулиця Толстого,148-152, Чернігів',
//            'image' => 'LeoHostel.jpg',
//            'phone_number'=>'+38(063)790 0069',
//            'email'=>'leohostel.com.ua',
//            'popularity' => '1',
//            'category' => 'hotel',
//        ]);
//
//        DB::table('places')->insert([
//            'name' => 'Готель "Україна"',
//            'address'=>'ГОТЕЛЬ “УКРАЇНА" проспект Перемоги, 88/33, Чернігів',
//            'description' => 'ТРИЗІРКОВИЙ ГОТЕЛЬ В САМОМУ ЦЕНТРІ ЧЕРНІГОВА
//Готель “Україна” знаходиться на перетині ділової, культурної та історичної частин міста. Завдяки цьому не виникне жодних проблем з тим, щоб дістатися до готелю на громадському транспорті.
//
//Для гостей готелю:
//
//Автостоянка з цілодобовим спостереженням;
//Послуги прання та прасування одягу;
//Ресторанне обслуговування;
//Доступ до мережі Інтернет;
//90 номерів та спеціальні номери для людей з особливими потребами
//Проведіть яскраві вихідні відпочиваючі в готелі “Україна”.',
//            'image' => 'hotelUkraine.jpg',
//            'phone_number'=>'+380462 651 400',
//            'email'=>'hotel-ukraina.com.ua',
//            'popularity' => '2',
//            'category' => 'hotel',
//        ]);
//
//        DB::table('places')->insert([
//            'name' => 'PAPA`S ХОСТЕЛ',
//            'description' => 'ПРЕКРАСНИЙ ХОСТЕЛ У ЦЕНТРІ МІСТА ЛЕГЕНД
//Якщо ви бажаєте зупинитись в центрі міста та не переплачувати за це, то зупиніться в чудовому хостелі Papa`s.
//
//Для всіх гостей хостелу:
//
//Зона відпочинку;
//Ліжка за натуральної деревини та з ортопедичними матрацами;
//Кухонна зона з електрочайником, мікрохвильвою піччю та холодильником;
//Безкоштовний WiFi;
//Сучасний ремонт та індивідуальні ванні кімнати в кожному номері
//Через дорогу від хостела Papa`s знаходиться П’ятницька церков, а всього в 600 метрах  Дитинець – найдревніша частина Міста Легенд. Також поряд знаходяться і найкращі кафе та ресторани Чернігова.',
//            'address' => 'вулиця Гетьмана Полуботка, 6, Чернігів',
//            'image' => 'PapasHostel.jpg',
//            'phone_number'=>'+38 (093) 000 8483',
//            'email'=>'vk.com/hostel.papas',
//            'popularity' => '1',
//            'category' => 'hotel',
//        ]);
//
//        DB::table('places')->insert([
//            'name' => 'ПАРК-ГОТЕЛЬ “ЧЕРНІГІВ”',
//            'description' => 'ПАРК-ГОТЕЛЬ “ЧЕРНІГІВ” – СУЧАСНИЙ ГОТЕЛЬ НЕПОДАЛІК ВІД КРАСУНІ ДЕСНИ
//Парк-готель “Чернігів” сучасний готель, що знаходиться в мальовничій частині міста. Поряд з готелем є парк, до можна прогулятись, а неподалік – річка Десна. Свіже повітря та прекрасний краєвид з вікна гарантовано.
//
//Для всіх гостей готелю:
//
//Першокласний рум-сервіс;
//Кафе “Пармезан”;
//Цілодобовий лоббі-бар;
//Велопрогулянки;
//Пральня;
//Трансфер та просторий паркінг;
//Конференц-сервіс;
//Номери різного класу
//Також парк-готель “Чернігів” з радістю проведе банкет або весілля.',
//            'address' => 'вул. Шевченко, 103-а, Чернігів',
//            'image' => 'ParkHotel.jpg',
//            'phone_number'=>'+38 (0462) 64 -64 -64',
//            'email'=>'park-hotel.cn.ua',
//            'popularity' => '1',
//            'category' => 'hotel',
//        ]);
//
//        DB::table('places')->insert([
//            'name' => 'Красна Площа',
//            'description' => 'КРАСНА ПЛОЩА – СЕРЦЕ МІСТА ЛЕГЕНД
//Колись, за часів Київської Русі, на місці площі був величезний торговий посад, куди з’їзджались купці з усієї округи. Але ті часи вже давно минули, і зараз це головна частина міста, де розташовані культурні та адміністративні центри Чернігова.
//
//За своїми розмірами площа є однією з найбільших в Україні, а за концентрацією архітектурних пам’яток – найбагатшою!
//
//Тут розташований легендарний кінотеатр імені Щорса, який вже майже століття радує цікавими кінопрем’єрами. Поряд є музичний фонтан та незвичайні за архітектурою споруди, в яких зараз знаходяться національний банк та міська рада.
//
//З іншого боку площі – драматичний театр імені Т.Г. Шевченка, який є одним з найстаріших театрів України.
//
//А по дорозі від площі до древнього Дитинця вас чекає “гастрономічний променад” – найсмачніша вулиця Міста Легенд, де розташовані найкращі кафе та ресторани Чернігова.
//
//Це варто побачити!',
//            'address' => 'Красна Площа, Вулиця Шевченка, 7, Чернігів',
//            'image' => 'redSquare.jpg',
//            'phone_number'=>'',
//            'email'=>'',
//            'popularity' => '',
//            'category' => 'seeings',
//        ]);
//
//        DB::table('places')->insert([
//            'name' => 'ВАЛ ТА ЧЕРНІГІВСЬКІ ГАРМАТИ',
//            'description' => 'ГАРМАТИ НА ВАЛУ – ОБОРОНА ДРЕВНЬОГО МІСТА
//Дивовижні краєвиди Десни та Болдиних гір, пам’ятник Шевченку, запальна музика від вуличних музикантів та 12 гармат – все це чарує жителів міста та приваблює туристів.
//
//Майже кожен куточок Чернігова овіяний легендами і вал з гарматами не вийняток. Звідки ж вони з’явились на валу?
//
//Згідно з однією з легенд, їх Чернігову подарував Петро І за відвагу чернігівських козаків у війні зі шведами. Але є ще чимало легенд які можуть відкрити багато нового та неймовірно цікавого.
//
//Як відомо краще один раз побачити, аніж сто разів почути. Помилуватись краєвидами красуні Десни та на власні очі побачити справжні гармати можна тільки у Місті Легенд.',
//            'address' => '',
//            'image' => 'Val.jpg',
//            'phone_number'=>'',
//            'email'=>'',
//            'popularity' => '',
//            'category' => 'seeings',
//        ]);
//
//
//        DB::table('places')->insert([
//            'name' => 'Ялівщина',
//            'description' => 'ПІКНІЧОК У МІСТІ ЛЕГЕНД
//Неможливо знайти того, хто не любить відпочити на природі. Свіже повітря, спів пташок та чудові краєвиди – це справжня насолода!
//
//Якщо ви скучили за пікніком, то поспішайте до Міста Легенд, адже тут, щоб піти до лісу навіть не треба їхати за місто!
//
//Лісопарк Ялівщина є одним з найбільших в Україні. Саме тут нараховується більш ніж 150 видів рідкісних рослин. Лісопарк ретельно охороняється, тут проводяться регулярні прибирання.
//
//Кращого місця пікніка вам просто не знайти:
//
//Величезний ліс з рідкісними рослинами;
//Річка Стрижень;
//Транспортне сполучення. Від Ялівщини можна потрапити майже в кожен куточок міста
//А для тих, хто бажає розбавити пікнічок активним відпочинком, є можливість покататись на катамаранах та повправлятись в альпінізмі.',
//            'address' => '',
//            'image' => 'Yalivshina.jpg',
//            'phone_number'=>'',
//            'email'=>'',
//            'popularity' => '',
//            'category' => 'seeings',
//        ]);
//        DB::table('places')->insert([
//            'name' => 'РЕСТОРАН ГРУЗИНСЬКОЇ КУХНІ “БУБА”',
//            'description' => 'РЕСТОРАН “БУБА” – ІСТИННА ГРУЗІЯ У ЦЕНТРІ ЧЕРНІГОВА
//Мрієте відчути запальні ритми Грузії та скуштувати найкращі страви однієї з найдревніших кухонь світу? – Тоді ласкаво просимо до ресторану Буба, що знаходиться в центрі древнього міста!
//
//Для вас пряні та гострі страви: харчо, хачапурі, курча табака та м’ясні страви з мангалу, які подарують незабутні “гастрономічні емоції”. Також грузинська кухня ресторану Буба – це турбота про ваше здоров’я, адже в основі майже всіх страв свіжі овочі, сири, зелень та трави.
//
//А для настрою – п’янке вино з найдревніших виноробних провінцій Грузїї.
//
//Запальна Грузія у центрі Міста Легенд!
//
//Середній чек 150-200 гривень',
//            'address' => 'Проспект Миру, 21',
//            'image' => 'buba.jpg',
//            'phone_number'=>'+38 (093) 266 5556',
//            'email'=>'www.facebook.com/buba.hinkalna.chernihiv',
//            'popularity' => '',
//            'category' => 'food',
//        ]);
//
//        DB::table('places')->insert([
//            'name' => 'МАКДОНАЛЬДС',
//            'description' => 'Макдональдс – найпопулярніший світовий фастфуд
//
//“Макдональдс” – це заклад швидкого харчування, який не потребує того, щоб його якось представляли, адже ця мережа ресторанів відома на всіх континентах земної кулі. “Макдональдс” можна сміливо назвати найпопулярнішим фастфудом у світі, який полюбляють і діти, і дорослі. Такий статус “Макдональдс” заслужив завдяки високим стандартам якості продукції, обслуговування та чистоти.
//
//Привітні дівчата, які працюють біля кас, завжди зустрічають гостей ресторану щирою посмішкою, створюючи атмосферу гостинності у закладі.
//
//Окремої уваги заслуговує мегасмачна та поживна їжа у Макдональдс. Хрумка картопля фрі, незрівнянні чізбургери, смаковитий Біг-Мак, курячі нагетси, широкий вибір сандвічів та бургерів, прохолодні газовані напої з льодом, морозиво ріжок та ще дуже велика кількість страв, якими можна поласувати у ресторані, чекають на його відвідувачів.
//
//Середній чек – 35-70 гривень',
//            'address' => 'Вулиця Кирпоноса, 34',
//            'image' => 'mak.jpg',
//            'phone_number'=>'+38 (0462) 651 108',
//            'email'=>'',
//            'popularity' => '',
//            'category' => 'food',
//        ]);
//        DB::table('places')->insert([
//            'name' => 'ЛЬВІВСЬКА МАЙСТЕРНЯ ШОКОЛАДУ',
//            'description' => '“МАЛЕНЬКИЙ ЛЬВІВ” У ДРЕВНЬОМУ ЧЕРНІГОВІ
//Львів ставиться своєю кавою на всю Україну, але для того щоб її скуштувати не обов’язково їхати до міста лева. Насолодитись її смаком можна і у Місті Легенд!
//
//“Львівська майстерня шоколаду” пригостить вас різноманітними видами кави та чаю, смачним лимонадом, а також справжніми витворами мистецтва з шоколаду, які подарують насолоду не лише зовнішнім виглядом, а й незабутнім смаком.
//
//Вас чекає чудовий інтер’єр затишної кав’ярні, неймовірні смаколики та ароматна кава – ви зможете поєднати красу древнього Чернігова з традиціями Львова.
//
//Все інше це просто їжа. А шоколад це шоколад.
//
//Середній чек – 80-100 гривень',
//            'address' => 'Проспект Миру, 45, Чернігів',
//            'image' => 'lviv.jpg',
//            'phone_number'=>'+38 (099) 340 7316',
//            'email'=>'www.facebook.com/LvivChocolateChernihiv',
//            'popularity' => '',
//            'category' => 'food',
//        ]);
        DB::table('places')->insert([
            'name' => 'КАРТОДРОМ',
            'description' => 'ЕКСТРИМ НА ВИСОКІЙ ШВИДКОСТІ
Бажаєте потрапити на територію чистого андреналіну? – Тоді вам на картодром Міста Легенд!

Тут на вас чекають сучасні моделі картингів: Sodi GT5 та CRG – Maranello, вони швидкі та маневрені, а головне – прості у керуванні. Якщо ви вперше сідаєте за кермо картингу, то для вас буде проведено інструктаж та майстер-клас.

Регулярно проводяться змагання в яких можуть взяти участь всі бажаючі. Якщо ви хочете довести свої вміння та показати хто господар гоночного треку, то вам неодмінно треба відвідати картодром.

Відчуйте себе королем перегонів на картодромі Міста Легенд!',
            'address' => 'Квітнева вулиця, 21, Чернігів',
            'image' => 'kart.jpg',
            'phone_number'=>'+38 093-956-91-63',
            'email'=>'www.kartodrom.com.ua',
            'popularity' => '',
            'category' => 'fun',
        ]);
        DB::table('places')->insert([
            'name' => 'ТРЦ HOLLYWOOD',
            'description' => 'БЕЗЛІЧ РОЗВАГ У ТРЦ HOLLYWOOD
Найбільший торгово-розважальний комплекс Чернігова дарує безліч розваг для всієї родини:

Величезний центр для дітей Дитяча Планета за батутами та басейнами з поролоновими кубиками;
Ігровий центр Game Busters, де можна пограти в більярд та комп’ютерні ігри на сучасних консолях;
Багатозальний 3-D кiнотеатр Multiplex;
Контактний зоопарк;
Симулятори віртуальної реальності;
Та улюблена розвага всіх дівчат – шоппінг!
Безліч розваг під одним дахом в ТРЦ Hollywood',
            'address' => 'вулиця 77-ї Гвардійської Дивізії, 1, Чернігів',
            'image' => 'holly.jpg',
            'phone_number'=>'+38 (063) 482 4040',
            'email'=>'hollywood.cn.ua',
            'popularity' => '',
            'category' => 'fun',
        ]);
        DB::table('places')->insert([
            'name' => 'КАТАМАРАНИ',
            'description' => 'СПОРТ І РОМАНТИКА ПІД ЧАС ПРОГУЛЯНОК НА КАТАМАРАНІ
Чи можливо поєднати спорт та романтику? – У Місті Легенд можливо все!

На річці Стрижень у вас буде можливість поплавати на катамарані, помилуватись прекрасними лісовими пейзажами Ялівщини та поговорити про кохання зі своєю другою половинкою. Що може бути краще для закоханої пари?

Плавання на катамарані не тільки для тих, хто мріє про романтику, а й для тих, хто хоче тримати себе у чудовій фізичній формі, адже щоб розігнати катамаран потрібно прикласти немало зусиль. Це чудове тренування на свіжому повітрі!

Катамарани на Стрижні – це романтика та спорт.',
            'address' => 'вулиця Волонтерів, 4, Чернігів',
            'image' => 'katamaranu.jpg',
            'phone_number'=>'',
            'email'=>'',
            'popularity' => '',
            'category' => 'fun',
        ]);

    }
}
