CREATE TABLE users (
	id INT (11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id)
);

CREATE TABLE comments (
	id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    comment_text TEXT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    users_id INT(11),
    PRIMARY KEY (id),
    FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
);

INSERT INTO users (username, pwd, email) VALUES ('Solberg', 'pass123', 'johndoe@gmail.com');
INSERT INTO users (username, pwd, email) VALUES ('Hansen', 'Hansen123', 'Hansen@gmail.com');

UPDATE users SET username = 'HansenIsCool', pwd = 'hansen456' WHERE id = 2;

DELETE FROM users WHERE  id = 1;

INSERT INTO users (username, pwd, email) VALUES ('Solberg', 'pass123', 'johndoe@gmail.com');
INSERT INTO comments (username, comment_text, users_id) VALUES ('Solberg', 'This is a comment on a website!', 3);

SELECT username, email FROM users WHERE id = 3;
SELECT username, comment_text FROM comments WHERE users_id = 3;

SELECT * FROM comments WHERE users_id = 3;

SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;

SELECT users.username, comments.comment_text, comments.created_at FROM users INNER JOIN comments ON users.id = comments.users_id;