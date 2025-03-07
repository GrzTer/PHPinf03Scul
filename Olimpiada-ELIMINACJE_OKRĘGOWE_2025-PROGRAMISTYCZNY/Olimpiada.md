# BLOK PROGRAMISTCZNY - ELIMINACJE SZKOLNE OLIMPIADY INF 2024_25
![[Pasted image 20250307095843.png]]
![[Pasted image 20250307100023.png]]
__Odp. zazn. : a,d__
![[Pasted image 20250307100105.png]]
__Odp. zazn. : a__
![[Pasted image 20250307100339.png]]
__Odp. zazn. : c__
![[Pasted image 20250307100734.png]]
__Odp. zazn. : c__ a już nie ma tylko 1 gdy jest printowana, tylko w domyślnej tablicy znajdujes się także b, ta tablica ma różne odwołania a i b. Śmieszne i do pomyłki łatwe
![[Pasted image 20250307101221.png]]
__Odp. zazn. :b
![[Pasted image 20250307101324.png]]
__Odp. zazn. : c__
![[Pasted image 20250307101357.png]]
__Odp. zazn. : b,d
![[Pasted image 20250307101458.png]]
__Odp. zazn. : c,d__
![[Pasted image 20250307101542.png]]
__Odp. zazn. : c__
![[Pasted image 20250307101615.png]]
__Odp. zazn. : a,b,c__
![[Pasted image 20250307101723.png]]
__Odp. zazn. : a,d__
![[Pasted image 20250307101802.png]]
__Odp. zazn. : a,d__
![[Pasted image 20250307101852.png]]
__Odp. zazn. : b,c,d__
![[Pasted image 20250307102009.png]]
__Odp. zazn. : b,c,d
![[Pasted image 20250307102117.png]]
__Odp. zazn. : a,b__
![[Pasted image 20250307102224.png]]
__Odp. zazn. : d__
![[Pasted image 20250307102315.png]]
__Odp. zazn. : b?__
![[Pasted image 20250307102438.png]]
__Odp. zazn. : a???__
![[Pasted image 20250307102651.png]]
__Odp. zazn. : b,d__
![[Pasted image 20250307102750.png]]
__Odp. zazn. : b__
![[Pasted image 20250307102846.png]]
__Odp. zazn. :![[Pasted image 20250307103031.png]]![[Pasted image 20250307103133.png]]![[Pasted image 20250307103231.png]]![[Pasted image 20250307103318.png]]![[Pasted image 20250307103419.png]]
![[Pasted image 20250307103517.png]]
__Odp. zazn. : ![[Pasted image 20250307103552.png]]![[Pasted image 20250307103558.png]]![[Pasted image 20250307103614.png]]![[Pasted image 20250307103630.png]]![[Pasted image 20250307103648.png]]
![[Pasted image 20250307104013.png]]
__Odp. zazn. : ![[Pasted image 20250307103831.png]]![[Pasted image 20250307103848.png]]![[Pasted image 20250307103913.png]]![[Pasted image 20250307103934.png]]![[Pasted image 20250307103948.png]]__
![[Pasted image 20250307105223.png]]
def fibonacci(n): # Definicja funkcji, która oblicza n-ty element ciągu Fibonacciego
    a, b = 0, 1 # Inicjalizacja dwóch pierwszych elementów ciągu
    for i in range(n): # Pętla wykonująca się n razy
        a, b = b, a + b # Przesuwanie wartości: a = b, b = a + b
    return a # Zwracamy n-ty element ciągu

n = int(input()) # Wczytanie liczby n od użytkownika
print(fibonacci(n)) # Wywołanie funkcji i wypisanie wyniku