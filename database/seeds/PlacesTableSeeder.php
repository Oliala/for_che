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
        DB::table('places')->insert([
            'name' => 'Leo hostel',
            'description' => 'ЛЕО – ДОСТУПНИЙ ХОСТЕЛ З НАТУРАЛЬНИМИ МЕБЛЯМИ
Всіх гостей Чернігова гостинно запрошує доступний, але дуже комфортний хостел Лео.

Хостел знаходиться в живописному районі міста, адже поряд Болдині гори, легендарні Антонієві печери та Троїцький собор з оглядовим майданчиком у дзвінниці.

Для всіх гостей хостела:

Комфортні номери 2, 4, 6 та 8 місні номери;
Дизайнерський ремонт та регулярне прибирання;
Ортопедичні матраци на ліжках з натурального дерева;
Кафе-бар прямо в хостелі;
Окремий сан-вузол у кожній кімнаті;
WiFi
Тут можна з комфортом переночувати, а також перекусити за символічну ціну.',
            'address' => 'вулиця Толстого,148-152, Чернігів',
            'image' => 'LeoHostel.jpg',
            'phone_number'=>'+38(063)790 0069',
            'email'=>'leohostel.com.ua',
            'popularity' => '1',
            'category' => 'hotel',
        ]);

        DB::table('places')->insert([
            'name' => 'Готель "Україна"',
            'address'=>'ГОТЕЛЬ “УКРАЇНА" проспект Перемоги, 88/33, Чернігів',
            'description' => 'ТРИЗІРКОВИЙ ГОТЕЛЬ В САМОМУ ЦЕНТРІ ЧЕРНІГОВА
Готель “Україна” знаходиться на перетині ділової, культурної та історичної частин міста. Завдяки цьому не виникне жодних проблем з тим, щоб дістатися до готелю на громадському транспорті.

Для гостей готелю:

Автостоянка з цілодобовим спостереженням;
Послуги прання та прасування одягу;
Ресторанне обслуговування;
Доступ до мережі Інтернет;
90 номерів та спеціальні номери для людей з особливими потребами
Проведіть яскраві вихідні відпочиваючі в готелі “Україна”.',
            'image' => 'hotelUkraine.jpg',
            'phone_number'=>'+380462 651 400',
            'email'=>'hotel-ukraina.com.ua',
            'popularity' => '2',
            'category' => 'hotel',
        ]);

        DB::table('places')->insert([
            'name' => 'PAPA`S ХОСТЕЛ',
            'description' => 'ПРЕКРАСНИЙ ХОСТЕЛ У ЦЕНТРІ МІСТА ЛЕГЕНД
Якщо ви бажаєте зупинитись в центрі міста та не переплачувати за це, то зупиніться в чудовому хостелі Papa`s.

Для всіх гостей хостелу:

Зона відпочинку;
Ліжка за натуральної деревини та з ортопедичними матрацами;
Кухонна зона з електрочайником, мікрохвильвою піччю та холодильником;
Безкоштовний WiFi;
Сучасний ремонт та індивідуальні ванні кімнати в кожному номері
Через дорогу від хостела Papa`s знаходиться П’ятницька церков, а всього в 600 метрах  Дитинець – найдревніша частина Міста Легенд. Також поряд знаходяться і найкращі кафе та ресторани Чернігова.',
            'address' => 'вулиця Гетьмана Полуботка, 6, Чернігів',
            'image' => 'PapasHostel.jpg',
            'phone_number'=>'+38 (093) 000 8483',
            'email'=>'vk.com/hostel.papas',
            'popularity' => '1',
            'category' => 'hotel',
        ]);

        DB::table('places')->insert([
            'name' => 'ПАРК-ГОТЕЛЬ “ЧЕРНІГІВ”',
            'description' => 'ПАРК-ГОТЕЛЬ “ЧЕРНІГІВ” – СУЧАСНИЙ ГОТЕЛЬ НЕПОДАЛІК ВІД КРАСУНІ ДЕСНИ
Парк-готель “Чернігів” сучасний готель, що знаходиться в мальовничій частині міста. Поряд з готелем є парк, до можна прогулятись, а неподалік – річка Десна. Свіже повітря та прекрасний краєвид з вікна гарантовано.

Для всіх гостей готелю:

Першокласний рум-сервіс;
Кафе “Пармезан”;
Цілодобовий лоббі-бар;
Велопрогулянки;
Пральня;
Трансфер та просторий паркінг;
Конференц-сервіс;
Номери різного класу
Також парк-готель “Чернігів” з радістю проведе банкет або весілля.',
            'address' => 'вул. Шевченко, 103-а, Чернігів',
            'image' => 'ParkHotel.jpg',
            'phone_number'=>'+38 (0462) 64 -64 -64',
            'email'=>'park-hotel.cn.ua',
            'popularity' => '1',
            'category' => 'hotel',
        ]);

        DB::table('places')->insert([
            'name' => 'Красна Площа',
            'description' => 'КРАСНА ПЛОЩА – СЕРЦЕ МІСТА ЛЕГЕНД
Колись, за часів Київської Русі, на місці площі був величезний торговий посад, куди з’їзджались купці з усієї округи. Але ті часи вже давно минули, і зараз це головна частина міста, де розташовані культурні та адміністративні центри Чернігова.

За своїми розмірами площа є однією з найбільших в Україні, а за концентрацією архітектурних пам’яток – найбагатшою!

Тут розташований легендарний кінотеатр імені Щорса, який вже майже століття радує цікавими кінопрем’єрами. Поряд є музичний фонтан та незвичайні за архітектурою споруди, в яких зараз знаходяться національний банк та міська рада.

З іншого боку площі – драматичний театр імені Т.Г. Шевченка, який є одним з найстаріших театрів України.

А по дорозі від площі до древнього Дитинця вас чекає “гастрономічний променад” – найсмачніша вулиця Міста Легенд, де розташовані найкращі кафе та ресторани Чернігова.

Це варто побачити!',
            'address' => 'Красна Площа, Вулиця Шевченка, 7, Чернігів',
            'image' => 'redSquare.jpg',
            'phone_number'=>'',
            'email'=>'',
            'popularity' => '',
            'category' => 'seeings',
        ]);

        DB::table('places')->insert([
            'name' => 'ВАЛ ТА ЧЕРНІГІВСЬКІ ГАРМАТИ',
            'description' => 'ГАРМАТИ НА ВАЛУ – ОБОРОНА ДРЕВНЬОГО МІСТА
Дивовижні краєвиди Десни та Болдиних гір, пам’ятник Шевченку, запальна музика від вуличних музикантів та 12 гармат – все це чарує жителів міста та приваблює туристів.

Майже кожен куточок Чернігова овіяний легендами і вал з гарматами не вийняток. Звідки ж вони з’явились на валу?

Згідно з однією з легенд, їх Чернігову подарував Петро І за відвагу чернігівських козаків у війні зі шведами. Але є ще чимало легенд які можуть відкрити багато нового та неймовірно цікавого.

Як відомо краще один раз побачити, аніж сто разів почути. Помилуватись краєвидами красуні Десни та на власні очі побачити справжні гармати можна тільки у Місті Легенд.',
            'address' => '',
            'image' => 'Val.jpg',
            'phone_number'=>'',
            'email'=>'',
            'popularity' => '',
            'category' => 'seeings',
        ]);


        DB::table('places')->insert([
            'name' => 'Ялівщина',
            'description' => 'ПІКНІЧОК У МІСТІ ЛЕГЕНД
Неможливо знайти того, хто не любить відпочити на природі. Свіже повітря, спів пташок та чудові краєвиди – це справжня насолода!

Якщо ви скучили за пікніком, то поспішайте до Міста Легенд, адже тут, щоб піти до лісу навіть не треба їхати за місто!

Лісопарк Ялівщина є одним з найбільших в Україні. Саме тут нараховується більш ніж 150 видів рідкісних рослин. Лісопарк ретельно охороняється, тут проводяться регулярні прибирання.

Кращого місця пікніка вам просто не знайти:

Величезний ліс з рідкісними рослинами;
Річка Стрижень;
Транспортне сполучення. Від Ялівщини можна потрапити майже в кожен куточок міста
А для тих, хто бажає розбавити пікнічок активним відпочинком, є можливість покататись на катамаранах та повправлятись в альпінізмі.',
            'address' => '',
            'image' => 'Yalivshina.jpg',
            'phone_number'=>'',
            'email'=>'',
            'popularity' => '',
            'category' => 'seeings',
        ]);


        DB::table('places')->insert([
            'name' => 'Leo hostel',
            'description' => '',
            'address' => 'вулиця Толстого,148-152, Чернігів',
            'image' => 'LeoHostel.jpg',
            'phone_number'=>'+38(063)790 0069',
            'email'=>'',
            'popularity' => '',
            'category' => 'hotel',
        ]);
    }
}
