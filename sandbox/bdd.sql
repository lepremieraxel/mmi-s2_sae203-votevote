CREATE TABLE questions(id_question INTEGER PRIMARY KEY NOT NULL auto_increment, intitule TEXT, active BOOLEAN);

CREATE TABLE answers_q(id_answer_q INTEGER PRIMARY KEY NOT NULL auto_increment, answer_q TEXT, id_question INTEGER);

CREATE TABLE answers_u(id_answer_u INTEGER PRIMARY KEY NOT NULL auto_increment, email VARCHAR(255), answer_u TEXT, id_question INTEGER);

ALTER TABLE answers_q ADD FOREIGN KEY(id_question) REFERENCES questions(id_question);

ALTER TABLE answers_u ADD FOREIGN KEY(id_question) REFERENCES questions(id_question);