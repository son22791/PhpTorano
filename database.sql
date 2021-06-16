create DATABASE torano;
create TABLE users(
    user_id INT AUTO_INCREMENT,
    user_name VARCHAR(255) NOT NULL,
    user_phone VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    user_status INT,
    PRIMARY KEY (user_id)
)
INSERT INTO users(user_name, user_phone, user_email, user_password, user_status) Values ('Son', '0968598316', 'sonvtc96@gmail.com', '0968598316', 1)