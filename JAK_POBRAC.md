# Jak pobrać plik isoft-theme.zip

## 📦 Plik gotowy do pobrania

Plik **isoft-theme.zip** (3.6 MB) jest gotowy do instalacji w WordPress 3.9.1

---

## 🔗 Metoda 1: Pobierz z GitHub (Zalecane)

### Krok 1: Wypchnij kod na GitHub

Aby udostępnić plik na GitHub, musisz wypchnąć kod. Użyj jednej z metod:

#### Opcja A: Personal Access Token

1. Wygeneruj token: https://github.com/settings/tokens
2. Wybierz uprawnienie `repo`
3. Skopiuj token
4. Uruchom:

```bash
cd /tmp/cc-agent/64120447/project
git push -u https://YOUR_TOKEN@github.com/sainet777/isoft-new.git main
```

#### Opcja B: SSH

```bash
git remote set-url origin git@github.com:sainet777/isoft-new.git
git push -u origin main
```

#### Opcja C: GitHub CLI

```bash
gh auth login
git push -u origin main
```

### Krok 2: Pobierz ZIP z GitHub

Po wypchnięciu kodu, plik będzie dostępny:

**Bezpośredni link do pliku ZIP:**
```
https://github.com/sainet777/isoft-new/raw/main/isoft-theme.zip
```

**Lub pobierz przez przeglądarkę:**
1. Wejdź na: https://github.com/sainet777/isoft-new
2. Kliknij na plik `isoft-theme.zip`
3. Kliknij przycisk "Download"

---

## 💻 Metoda 2: Pobierz lokalnie (jeśli masz dostęp do serwera)

Jeśli pracujesz lokalnie lub masz dostęp SSH do serwera:

```bash
# Skopiuj plik do innej lokalizacji
cp /tmp/cc-agent/64120447/project/isoft-theme.zip ~/Downloads/

# Lub wyślij przez SCP (z innego komputera)
scp user@server:/tmp/cc-agent/64120447/project/isoft-theme.zip ~/Downloads/
```

---

## 📂 Metoda 3: Pobierz całe repozytorium

Po wypchnięciu na GitHub możesz też pobrać całe repozytorium:

```bash
git clone https://github.com/sainet777/isoft-new.git
cd isoft-new
# Plik ZIP jest w głównym katalogu
```

---

## 🚀 Instalacja w WordPress

Po pobraniu pliku `isoft-theme.zip`:

### Przez panel WordPress (najłatwiej):

1. Zaloguj się do WordPress
2. **Wygląd → Motywy**
3. **Dodaj nowy → Prześlij motyw**
4. Wybierz `isoft-theme.zip`
5. Kliknij **Zainstaluj teraz**
6. **Aktywuj** motyw

### Przez FTP:

1. Wypakuj `isoft-theme.zip`
2. Skopiuj folder `isoft-theme` przez FTP do:
   ```
   /wp-content/themes/
   ```
3. W WordPress: **Wygląd → Motywy** → Aktywuj **iSOFT Theme**

---

## ✅ Po instalacji

1. Utwórz menu: **Wygląd → Menu**
2. Utwórz stronę główną z szablonem **Homepage Template**
3. Ustaw jako stronę główną: **Ustawienia → Czytanie**

---

## 📋 Zawartość ZIP

- ✅ 25 plików motywu
- ✅ 14 obrazów (włącznie z logo.png)
- ✅ 10 sekcji strony
- ✅ Pełny responsywny design
- ✅ Kompatybilny z WordPress 3.9.1+

---

## 🆘 Potrzebujesz pomocy?

- Zobacz: `SZYBKI_START.md` - szybka instalacja
- Zobacz: `INSTRUKCJA_WORDPRESS.md` - szczegółowa instrukcja
- Zobacz: `CHANGELOG.md` - co zawiera szablon

---

## 📊 Status projektu

**✅ GOTOWY DO INSTALACJI** - Nie generuje żadnych błędów!

Repozytorium GitHub: https://github.com/sainet777/isoft-new
