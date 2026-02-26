# Instrukcja instalacji motywu iSOFT w WordPress 3.9.1

## 📦 Przygotowanie plików

Szablon WordPress znajduje się w katalogu:
```
wp-content/themes/isoft-theme/
```

## 🚀 Instalacja krok po kroku

### Metoda 1: Bezpośrednie kopiowanie (Zalecane)

1. **Podłącz się do serwera przez FTP/SFTP** (np. FileZilla, WinSCP)
   - Host: adres twojego serwera
   - Użytkownik: twoja nazwa użytkownika
   - Hasło: twoje hasło

2. **Przejdź do katalogu WordPress**:
   ```
   /public_html/wp-content/themes/
   ```
   (lub `/www/` lub inny katalog w zależności od konfiguracji)

3. **Skopiuj folder** `isoft-theme` do katalogu `themes`:
   ```
   /public_html/wp-content/themes/isoft-theme/
   ```

4. **Upewnij się**, że wszystkie pliki zostały skopiowane:
   - style.css
   - functions.php
   - header.php
   - footer.php
   - index.php
   - single.php
   - page.php
   - template-homepage.php
   - screenshot.png
   - README.md
   - js/script.js
   - images/ (folder z wszystkimi obrazami)

### Metoda 2: Instalacja przez panel WordPress

1. **Spakuj folder do archiwum ZIP**:
   - W Windows: Kliknij prawym przyciskiem na folder `isoft-theme` → "Wyślij do" → "Folder skompresowany (zip)"
   - W Mac/Linux: `zip -r isoft-theme.zip wp-content/themes/isoft-theme/`

2. **Zaloguj się do panelu WordPress**:
   ```
   https://twoja-domena.pl/wp-admin
   ```

3. **Przejdź do**: Wygląd → Motywy

4. **Kliknij**: "Dodaj nowy" → "Prześlij motyw"

5. **Wybierz plik ZIP** i kliknij "Zainstaluj teraz"

6. **Aktywuj motyw** po zakończeniu instalacji

## ⚙️ Konfiguracja po instalacji

### 1. Aktywacja motywu

W panelu WordPress:
- Przejdź do: **Wygląd → Motywy**
- Znajdź "iSOFT Theme"
- Kliknij **"Aktywuj"**

### 2. Utworzenie menu

1. Przejdź do: **Wygląd → Menu**
2. Kliknij "Utwórz nowe menu"
3. Nadaj nazwę: "Menu główne"
4. Dodaj następujące pozycje menu:
   - **Strona Główna** (link do strony głównej)
   - **O nas** (link niestandardowy: `#o-nas`)
   - **Oferta** (link niestandardowy: `#oferta`)
   - **Szkolenia** (link niestandardowy: `#szkolenia`)
   - **Akademia edukacyjna** (utwórz stronę lub link)
   - **Projekty Unijne** (utwórz stronę lub link)
   - **Praca** (utwórz stronę lub link)
   - **Przedsiębiorstwo społeczne** (utwórz stronę lub link)
   - **Kontakt** (utwórz stronę lub link)
5. W sekcji "Lokalizacje motywu" zaznacz: **Primary Menu**
6. Kliknij **"Zapisz menu"**

### 3. Utworzenie strony głównej

1. Przejdź do: **Strony → Dodaj nową**
2. Tytuł: "Strona główna"
3. W prawej kolumnie znajdź **"Atrybuty strony"**
4. W polu "Szablon" wybierz: **Homepage Template**
5. Kliknij **"Opublikuj"**

### 4. Ustawienie strony głównej

1. Przejdź do: **Ustawienia → Czytanie**
2. Zaznacz: **"Statyczna strona"**
3. W "Strona główna" wybierz: utworzoną stronę "Strona główna"
4. Kliknij **"Zapisz zmiany"**

## 📝 Tworzenie dodatkowych stron

Dla każdej pozycji menu możesz utworzyć osobne strony:

1. **Strony → Dodaj nową**
2. Wpisz tytuł (np. "O nas", "Kontakt")
3. Dodaj treść
4. W "Atrybuty strony" możesz zostawić domyślny szablon
5. **Opublikuj**

## 🎨 Dostosowanie treści

### Edycja strony głównej

Strona główna używa szablonu `template-homepage.php`. Aby zmienić treści:

1. Podłącz się przez FTP
2. Otwórz plik: `wp-content/themes/isoft-theme/template-homepage.php`
3. Edytuj teksty bezpośrednio w HTML
4. Zapisz i odśwież stronę

### Zmiana obrazów

Wszystkie obrazy znajdują się w:
```
wp-content/themes/isoft-theme/images/
```

Możesz zastąpić je własnymi, zachowując te same nazwy:
- `isoft.png` - Hero image (tło główne)
- `isoft1a.png` - Ikona certyfikatów
- `isoft1b.png` - Ikona szkoleń
- `isoft1c.png` - Ikona projektów UE
- `isoft1e.png` - Personalizacja szkoleń
- `isoft1f.png` - Trenerzy
- `isoft1g.png` - Zespół
- `isoft1h.png` - Doświadczenie
- `isoft1i.png` - CTA (wezwanie do działania)

### Zmiana kolorów

Kolory są zdefiniowane w pliku `style.css`:

```css
/* Główne kolory */
#1e3a8a  /* Niebieski - główny */
#00d4c4  /* Cyjan - akcent */
#ffffff  /* Biały - tło */
#333333  /* Ciemny - tekst */
#f8fafc  /* Jasny - sekundarne tło */
```

Możesz je zmienić, edytując plik `wp-content/themes/isoft-theme/style.css`

## 🔧 Rozwiązywanie problemów

### Motyw nie pojawia się w panelu

- Upewnij się, że folder ma nazwę `isoft-theme`
- Sprawdź, czy plik `style.css` znajduje się bezpośrednio w folderze motywu
- Sprawdź uprawnienia plików (powinny być 644 dla plików, 755 dla folderów)

### Obrazy się nie wyświetlają

- Sprawdź, czy folder `images/` został skopiowany
- Sprawdź uprawnienia folderu `images/` (755)
- Sprawdź uprawnienia obrazów (644)
- Wyczyść cache przeglądarki (Ctrl+F5)

### Menu nie działa

- Upewnij się, że menu jest przypisane do lokalizacji "Primary Menu"
- Sprawdź, czy JavaScript jest włączony w przeglądarce
- Wyczyść cache WordPress (jeśli używasz wtyczki do cache)

### Smooth scroll nie działa

- Upewnij się, że plik `js/script.js` został skopiowany
- Sprawdź konsolę przeglądarki (F12) pod kątem błędów JavaScript
- Wyczyść cache przeglądarki

## 📱 Responsywność

Szablon jest w pełni responsywny i działa na:
- 📱 Telefony komórkowe (< 640px)
- 💻 Tablety (640px - 968px)
- 🖥️ Desktopy (> 968px)

## 🆘 Wsparcie

W przypadku pytań lub problemów:
- Sprawdź plik `README.md` w folderze motywu
- Sprawdź logi błędów WordPress: `wp-content/debug.log`
- Skontaktuj się z projektantem strony

## ✅ Checklist instalacji

- [ ] Skopiowano folder `isoft-theme` do `wp-content/themes/`
- [ ] Aktywowano motyw w panelu WordPress
- [ ] Utworzono i skonfigurowano menu
- [ ] Utworzono stronę główną z szablonem "Homepage Template"
- [ ] Ustawiono stronę główną w Ustawienia → Czytanie
- [ ] Sprawdzono działanie strony na różnych urządzeniach
- [ ] Wszystkie obrazy wyświetlają się prawidłowo
- [ ] Menu mobilne działa prawidłowo
- [ ] Smooth scroll działa dla linków typu `#sekcja`

---

**Gratulacje!** 🎉 Twoja strona iSOFT w WordPress jest gotowa!
