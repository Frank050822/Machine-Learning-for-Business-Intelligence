# Machine-Learning-for-Business-Intelligence
# This is for NYU Tandon Course Independent Study Final Project: Machine Learning for Business Intelligence 

## Bicycle Customers & Sales Analysis
Designed, developed and deployed machine learning models to perform thorough customer segmentation analysis and map the target market for company’s products and services

### Project Structure
1. **Developed a website to collect personal information using HTML
2. **Data was stored and connected to local database using PHP
3. **Sorted information by Extract-Transform-Load process using SQL  
4. **Imported new dataset using PyMySQL library 
5. **Implemented unsupervised model K-Means to segment customers into four groups: loyal customers, retained customers, hibernators and potential customers 
6. **Preprocessed complex dataset using Principal Component Analysis to run supervised regression models to predict customer behavior for potential purchases, and created a product recommendation system via the supervised classification model
7. **Furthermore Action: Create a pickle file using above models and upload to website directly so that once customer information was collected, we can predict which products s/he may buy and potential purchases. 

### Brief Description:
Boulder Expeditions is an online Biking company focused on Mountain and Touring bikes. There are two main objectives of our project: customer segmentation and predicting customer behavior. The dataset includes following features of each customer: BirthDate, MaritalStatus, Gender, AnnualIncome, TotalChildren, EducationLevel, Occupation, HomeOwner, lat, lng, OrderDate, StockDate, OrderQuantity, ProductName, ModelName, ProductCost, ProductPrice

### Objective / Solved Problem
1. Target marketing based on customer segmentation¶
We use K-Means to divide our customers into 4 different groups, and then marketing department employees can utilize this information to target the 
customers. 
2. Predict customer behavior for potential purchase
Regression: Based on customer personal information, we can predict how much money such customers would like to spend in the future. 
3. Create a product recommendation system
Classification: Based on customer personal information, we can predict which bicycles s/he may be interested in buying, so we can target our customers
with different marketing strategy.

### Python Analysis 
1. Unsupervised Model: K-Means

2. Supervised Model: 
- 2.1 Regression- Data Preprocessing - One Hot Encoder 
- 2.2 Data Preprocessing - Standarization 
- 2.3 Linear Regression - OLS


3. Supervised Model: Classification-
- 3.1 Logistic Regression 
- 3.2 K Nearest Neighbors 
- 3.3 Classification Tree 
- 3.4 Random Forest 
- 3.5 Naive Bayes 
- 3.6 Support Vector Machine 
- 3.7 Neural Network w/ Indentity Activation Function 
- 3.8 Table of Prediction Score       
