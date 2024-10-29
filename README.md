# Symthump

Symthump is a disease prediction application designed to help users identify potential health issues based on the symptoms they provide. The application leverages a Python-based backend powered by Flask and SQL Server to process user input, match symptoms with known health conditions, and provide relevant recommendations, including connections to healthcare professionals based on user location.

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [API Reference](#api-reference)
- [Project Structure](#project-structure)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)

## Features
- **Symptom-based Disease Prediction:** Users can input symptoms, and the app will suggest potential diagnoses.
- **Healthcare Professional Connection:** Connects users to local healthcare professionals via Practo integration based on geolocation.
- **User-Friendly Interface:** Simplified interface for entering symptoms and receiving quick results.
- **Data Security:** The application ensures that user data is managed securely and complies with privacy best practices.

## Installation
### Prerequisites
- Python 3.7+
- SQL Server
- Flask (Python library)
- Geolocation API Key (optional, for Practo or similar services)

### Steps
1. **Clone the Repository:**
   ```bash
   git clone https://github.com/zatch4321/symthump.git
   cd symthump
   ```

2. **Install Dependencies:**
   Install required Python libraries using pip:
   ```bash
   pip install -r requirements.txt
   ```

3. **Database Setup:**
   - Set up a SQL Server instance.
   - Configure the database connection details in the app configuration file (`config.py` or similar).
   - Run SQL scripts provided in the `database` folder (if available) to initialize tables.

4. **Run the Application:**
   Start the Flask server by running:
   ```bash
   python app.py
   ```
   The application will be available at `http://127.0.0.1:5000/`.

## Usage
1. Launch the application in a web browser.
2. Enter symptoms into the input form.
3. Submit the form to receive a diagnosis suggestion.
4. If needed, connect with healthcare professionals recommended based on the provided symptoms and location.

## API Reference
The API allows integration with other applications or services to extend Symthump’s functionality.

### Endpoints
- **POST /predict**: Receives symptom data, returns predicted disease information.
- **GET /professionals**: Fetches a list of nearby healthcare professionals based on geolocation.

### Example Request
```http
POST /predict
Content-Type: application/json
{
  "symptoms": ["fever", "cough", "headache"]
}
```

### Example Response
```json
{
  "prediction": {
    "disease": "Influenza",
    "recommendations": ["Stay hydrated", "Consult a doctor if symptoms persist"]
  }
}
```

## Project Structure
```
symthump/
│
├── app.py                 # Main Flask application
├── config.py              # Application configuration
├── database/
│   └── schema.sql         # SQL script to create necessary tables
├── static/                # Static files (CSS, images)
├── templates/             # HTML templates for the frontend
├── tests/                 # Test cases for the application
└── README.md              # Project documentation
```

## Technologies Used
- **Python** (Flask Framework): Backend server for processing data and API requests.
- **SQL Server**: Database management for storing symptoms and disease data.
- **HTML, CSS, JavaScript**: Frontend interface.
- **Practo API** (or similar service): For connecting users with healthcare professionals based on location.
  
## Contributing
We welcome contributions from the community! If you have any improvements or new feature suggestions:
1. Fork the repository.
2. Create a new branch (`feature/your-feature-name`).
3. Commit changes to your branch.
4. Submit a pull request to the `main` branch.

Please make sure to test your changes thoroughly before submitting a PR.
![image](https://github.com/user-attachments/assets/f75f66d0-7ade-4a62-aef7-46c31a884c24)
![image](https://github.com/user-attachments/assets/ca5c3cbd-1cf6-4f12-8f1f-58c87054310b)
![image](https://github.com/user-attachments/assets/84704ad7-cbcd-4ff2-9b8d-97f6e1d4f9af)


## License
This project is licensed under the MIT License. See the `LICENSE` file for details.

--- 
