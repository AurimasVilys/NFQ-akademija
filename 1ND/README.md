# PHP INTRO 1. Homework answers

## 1. kodėl: Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) yra 6?

Funkcijos įvesties parametrai yra int tipo kintamieji. Todėl funkcijai paduoti įvesties parametrai (3, 2.2, ‘1’) yra paverčiami į 3, 2, 1 prieš funkcijai atliekant jos apimtyje esantį kodą.

## 2. kas ir kodėl nutiko bandant kviesti: Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’);

Ši funkcija kviečia tame pačiame faile esančią funkciją ```_calculateHomeWorkSum(3, 2.2, ‘1’)```. Tokiu būdų, funkcija ```_calculateHomeWorkSum(3, 2.2, ‘1’)``` yra kviečiama funkcijos, kuriai yra taikoma direktyva ```declare(strict_types=1)```, todėl parametrų "cast'inimas" neatliekamas. 
Funkcijai yra paduodami parametrai (3 - int, 2.2 - float, '1' - string), tačiau visi parametrai privalo būtų int tipo. Neteisingai perdavus parametrus, išmetamas TypeError dėl float (2.2) ir string ('1') parametrų tarp funkcijos įvesties.


## 3. Papildomas klausiams: kodėl 'php' == 0 yra true?

Kadangi atliekamas loose comparison, todėl 'php' yra verčiamas į int tipo kintamąjį. String'as 'php' neprasideda su jokiu skaitmeniu, dėl to jis yra verčiamas į 0.
Grąžinamas atsakymas 0 == 0 -> true;