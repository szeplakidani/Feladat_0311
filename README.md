# Feladat_0311

12.E feladatlap

### **Programozási tétel**

Ez egy  **transzformációs algoritmus** , mert a bemeneti tömböt (`$tombBe`) átalakítja egy másik tömbbé (`$tombKi`) egy adott szabály szerint.

# PHP Feladat – Transzformáció

Ez a program egy tömb elemeit módosítja és egy új tömbbe menti az eredményt. A programozási tétel, amelyet alkalmaz, a **transzformáció**.

## Működés

1. A `tombBe` tömb kezdetben `"B", "B"` elemeket tartalmaz.
2. Egy `for` ciklus végigmegy az elemein:
   - Minden elemhez hozzáfűzi az `"A"` betűt.
   - Az így kapott új értéket önmagával duplázza.
3. Az eredmény a `tombKi` tömbben tárolódik.

## Példa kimenet:  

Array ( [0] => B [1] => B ) Array ( [0] => BABA [1] => BABA [2] =>  [3] =>  )
