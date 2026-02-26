# Instrukcja wypchnięcia do GitHub

Szablon WordPress jest gotowy i zacommitowany lokalnie. Aby wypchnąć go do repozytorium GitHub, wykonaj następujące kroki:

## Opcja 1: Użycie Personal Access Token (PAT)

1. Wygeneruj Personal Access Token w GitHub:
   - Przejdź do https://github.com/settings/tokens
   - Kliknij "Generate new token" (classic)
   - Nadaj nazwę np. "isoft-theme-upload"
   - Zaznacz uprawnienie `repo` (pełny dostęp do repozytoriów)
   - Kliknij "Generate token"
   - **Skopiuj token** (będzie widoczny tylko raz!)

2. Wypchnij kod używając tokena:
   ```bash
   git push https://YOUR_TOKEN@github.com/sainet777/isoftok.git main
   ```

   Zastąp `YOUR_TOKEN` swoim wygenerowanym tokenem.

## Opcja 2: Użycie SSH (Zalecane)

1. Wygeneruj klucz SSH (jeśli jeszcze go nie masz):
   ```bash
   ssh-keygen -t ed25519 -C "twoj-email@example.com"
   ```

2. Dodaj klucz SSH do GitHub:
   - Skopiuj zawartość pliku `~/.ssh/id_ed25519.pub`
   - Przejdź do https://github.com/settings/keys
   - Kliknij "New SSH key"
   - Wklej skopiowaną zawartość
   - Kliknij "Add SSH key"

3. Zmień adres remote na SSH:
   ```bash
   cd /tmp/cc-agent/64120447/project
   git remote set-url origin git@github.com:sainet777/isoftok.git
   git push -u origin main
   ```

## Opcja 3: Użycie GitHub CLI

1. Zainstaluj GitHub CLI: https://cli.github.com/

2. Zaloguj się:
   ```bash
   gh auth login
   ```

3. Wypchnij kod:
   ```bash
   cd /tmp/cc-agent/64120447/project
   git push -u origin main
   ```

## Stan aktualny

Wszystkie pliki są już zacommitowane lokalnie:
- ✅ 25 plików dodanych
- ✅ Commit: "Kompletny szablon WordPress 3.9.1 dla iSOFT - wszystkie sekcje ze strony isoft.biz.pl"
- ✅ Branch: main
- ⏳ Czeka na wypchnięcie do GitHub

## Alternatywnie: Ręczne przesłanie przez interfejs GitHub

Jeśli masz problemy z linią poleceń:

1. Przejdź do https://github.com/sainet777/isoftok
2. Kliknij "Add file" → "Upload files"
3. Przeciągnij folder `wp-content/themes/isoft-theme/` z wszystkimi plikami
4. Dodaj commit message
5. Kliknij "Commit changes"

---

Po wypchnięciu kodu, szablon będzie dostępny w repozytorium GitHub i gotowy do instalacji w WordPress!
