CREATE TABLE questions(
  id_question INTEGER PRIMARY KEY NOT NULL auto_increment,
  intitule TEXT,
  active BOOLEAN
);

CREATE TABLE answers_q(
  id_answer_q INTEGER PRIMARY KEY NOT NULL auto_increment,
  answer_q TEXT,
  id_question INTEGER,
  FOREIGN KEY(id_question)
    REFERENCES questions(id_question)
    ON DELETE CASCADE
);

CREATE TABLE answers_u(
  id_answer_u INTEGER PRIMARY KEY NOT NULL auto_increment,
  email VARCHAR(255),
  id_answer_q INTEGER,
  id_question INTEGER,
  FOREIGN KEY(id_question) 
    REFERENCES questions(id_question)
    ON DELETE CASCADE,
  FOREIGN KEY(id_answer_q)
    REFERENCES answers_q(id_answer_q)
    ON DELETE CASCADE
);