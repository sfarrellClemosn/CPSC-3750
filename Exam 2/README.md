# Word Vowel Counter

A PHP application that reads words from a text file, counts vowels, and provides an interactive frontend for viewing and organizing words.

## Features

- **Backend (PHP)**: Reads words from `words.txt`, counts vowels (A, E, I, O, U), and organizes words by vowel count
- **Frontend**: Interactive interface with buttons for each vowel count
- **Scrollable Lists**: Words are displayed in scrollable lists, sorted by length (shortest to longest)
- **Drag & Drop**: Users can drag words from the list and drop them into a designated area
- **Counter**: Displays the number of words dropped in the drop zone

## Files

- `index.html` - Main frontend interface
- `api.php` - PHP backend API
- `words.txt` - Text file containing words (one per line)

## Setup

1. **Install PHP**: Make sure you have PHP installed on your system
2. **Place files**: Put all files in a web-accessible directory
3. **Add your words**: Replace the content of `words.txt` with your word list (one word per line)

## Running the Application

### Option 1: Using PHP Built-in Server
```bash
# Navigate to the project directory
cd "c:\Users\sfarr\Documents\GitHub\CPSC-3750\Exam 2"

# Start PHP built-in server
php -S localhost:8000
```

Then open your browser and go to: `http://localhost:8000`

### Option 2: Using XAMPP/WAMP/MAMP
1. Copy the project folder to your web server's document root (htdocs for XAMPP)
2. Start your web server
3. Access the application through your web server

## Usage

1. **View Vowel Counts**: The application automatically scans your word file and creates buttons for each unique vowel count found
2. **Select Words**: Click any button to see all words with that many vowels
3. **Drag & Drop**: Drag any word from the list and drop it in the drop zone
4. **Track Progress**: The counter shows how many words you've dropped

## Word File Format

The `words.txt` file should contain one word per line:
```
apple
banana
cat
dog
...
```

## Customization

- **Add more words**: Simply edit `words.txt` and add more words (one per line)
- **Styling**: Modify the CSS in `index.html` to change the appearance
- **Functionality**: Extend the PHP API in `api.php` for additional features
