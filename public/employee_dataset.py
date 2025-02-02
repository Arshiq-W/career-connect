import sys
import pandas as pd
from sklearn.ensemble import RandomForestRegressor
from sklearn.model_selection import train_test_split
from sklearn.metrics import mean_squared_error

# Load arguments from the command line

args = sys.argv[1:]
employee_id = int(args[0])
department = args[1]
education = args[2]
total_working_years = int(args[3])
recent_years_at_company = int(args[4])
years_in_current_role = int(args[5])
gender = args[6]
salary = int(args[7])
experience_level = args[8]
# Load or create the dataset
csv_file = "user_data.csv"
try:
    data_df = pd.read_csv(csv_file)
except FileNotFoundError:
    data_df = pd.DataFrame(columns=[
        "EmployeeId", "Department", "Education", "TotalWorkingYears",
        "RecentYearsAtCompany", "YearsInCurrentRole", "Gender",
        "Salary", "ExperienceLevel", "rating"
    ])

# Encode categorical columns
departments = ["IT", "Computer Science", "Cyber Security", "Data Science"]
education_levels = ["Intermediate", "Bachelor's", "Master's", "Not Matriculation"]
genders = ["Male", "Female"]
experience_levels = ["Entry-Level", "Mid-Level", "Senior-Level"]

encoding_map = {
    "Department": {dept: idx for idx, dept in enumerate(departments)},
    "Education": {edu: idx for idx, edu in enumerate(education_levels)},
    "Gender": {"Male": 0, "Female": 1},
    "ExperienceLevel": {level: idx for idx, level in enumerate(experience_levels)},
}

def encode_value(value, mapping):
    return mapping.get(value, -1)

new_data = {
    "EmployeeId": employee_id,
    "Department": encode_value(department, encoding_map["Department"]),
    "Education": encode_value(education, encoding_map["Education"]),
    "TotalWorkingYears": total_working_years,
    "RecentYearsAtCompany": recent_years_at_company,
    "YearsInCurrentRole": years_in_current_role,
    "Gender": encode_value(gender, encoding_map["Gender"]),
    "Salary": salary,
    "ExperienceLevel": encode_value(experience_level, encoding_map["ExperienceLevel"]),
}

if not data_df.empty and "Salary" in data_df.columns:
    new_data["rating"] = salary / max(data_df["Salary"].max(), 1) * 5
else:
    new_data["rating"] = salary / 100000 * 5

data_df = pd.concat([data_df, pd.DataFrame([new_data])], ignore_index=True)
data_df.to_csv(csv_file, index=False)

if data_df['rating'].isna().any():
    data_df = data_df.dropna(subset=['rating'])

X = data_df[["Department", "Education", "TotalWorkingYears", "RecentYearsAtCompany",
             "YearsInCurrentRole", "Gender", "Salary", "ExperienceLevel"]]
y = data_df["rating"]

if X.isna().any().any():
    X = X.fillna(0)

if len(data_df) < 10:
    sys.exit(0)

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)
model = RandomForestRegressor(n_estimators=100, random_state=42)
model.fit(X_train, y_train)

user_features = pd.DataFrame([{
    "Department": encode_value(department, encoding_map["Department"]),
    "Education": encode_value(education, encoding_map["Education"]),
    "TotalWorkingYears": total_working_years,
    "RecentYearsAtCompany": recent_years_at_company,
    "YearsInCurrentRole": years_in_current_role,
    "Gender": encode_value(gender, encoding_map["Gender"]),
    "Salary": salary,
    "ExperienceLevel": encode_value(experience_level, encoding_map["ExperienceLevel"]),
}])

predicted_rating = model.predict(user_features)
print(f"Predicted rating for user {employee_id}: {predicted_rating[0]:.2f}")
