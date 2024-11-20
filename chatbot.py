from flask import Flask, request, jsonify
import joblib  # Untuk load model

app = Flask(__name__)

# Load model
model = joblib.load('model.pkl')

@app.route('/predict', methods=['POST'])
def predict():
    data = request.json
    features = data['features']  # Input dari frontend
    prediction = model.predict([features])
    return jsonify({'prediction': prediction.tolist()})

if __name__ == '__main__':
    app.run(debug=True)
