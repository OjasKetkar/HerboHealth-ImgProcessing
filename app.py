from flask import Flask, render_template, request
import keras
from keras.models import load_model
from keras.preprocessing import image
import numpy as np

app = Flask(__name__)


dic = {0 : 'Pomegranate', 1 : 'Rasna',2:'Tulsi',3:'Sandalwood',4:'Rose_apple',5:'Mint',6:'Parijata',7:'Oleander',8:'Neem',9:'Peepal',10:'Karanda',11:'Mango',12:'Jasmine',13:'Jamun',14:'Lemon',15:'Indian_Mustard',16:'Jackfruit',17:'Hibiscus',18:'Guava',19:'Drumstick',20:'Basale',21:'Curry',22:'Betel'}

model = load_model('model.h5')

model.make_predict_function()

def predict_label(img_path):
	i = keras.utils.load_img(img_path, target_size=(100,100))
	i = keras.utils.img_to_array(i)/255.0
	i = i.reshape(1, 100,100,3)
	# p = model.predict_classes(i)
	y_predict = np.argmax(model.predict(i), axis=1)
	return dic[y_predict[0]] 


# routes
@app.route("/", methods=['GET', 'POST'])
def main():
	return render_template("index.html")

@app.route("/about")
def about_page():
	return "Please subscribe  Artificial Intelligence Hub..!!!"

@app.route("/submit", methods = ['GET', 'POST'])
def get_output():
	if request.method == 'POST':
		img = request.files['my_image']

		img_path = "static/" + img.filename	
		img.save(img_path)

		p = predict_label(img_path)

	return render_template("index.html", prediction = p, img_path = img_path)


if __name__ =='__main__':
	#app.debug = True
	app.run(debug = True)


#The output of the code:
