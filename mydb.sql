CREATE TABLE users
(
  id        SERIAL PRIMARY KEY,
  fullname  VARCHAR(70),
  username  VARCHAR(30) NOT NULL UNIQUE,
  email     VARCHAR(80) NOT NULL UNIQUE,
  pswdhash  VARCHAR(80) NOT NULL    -- blowfish crypt(salt + password)
);

CREATE EXTENSION pgcrypto;

INSERT INTO users (fullname, username, email, pswdhash)
    VALUES ('James Palmer', 'ParSalian', 'jms.plmr@gmail.com', crypt('test1234', gen_salt('bf')));

DROP TABLE users;

SELECT users.id, (pswdhash = crypt('test1234', pswdhash)) as pswdmatch FROM users;

CREATE OR REPLACE FUNCTION validate_password(userpass VARCHAR(72)) RETURNS refcursor AS $$
  DECLARE
  ref refcursor;
  BEGIN
    OPEN ref FOR SELECT users.id, (pswdhash = crypt(userpass, pswdhash)) as pswdmatch FROM users;
    RETURN ref;
  END;
$$ LANGUAGE plpgsql;

DO $$BEGIN
  PERFORM validate_password('test1234');
END$$;

CREATE TABLE courses
(
  id              SERIAL PRIMARY KEY,
  name            VARCHAR(80) UNIQUE,
  street_address  VARCHAR(80),
  city            VARCHAR(40),
  state           VARCHAR(2),
  zip             INT,
  phone           INT,
  contact         VARCHAR(80)
);

CREATE TABLE game_format
(
  id          SERIAL PRIMARY KEY,
  name        VARCHAR(40) UNIQUE,
  description VARCHAR(500)
);

CREATE TABLE rounds
(
  id        SERIAL PRIMARY KEY,
  course_id INT REFERENCES courses(id) NOT NULL,
  user_id   INT REFERENCES users(id) NOT NULL,
  format_id INT REFERENCES game_format(id) NOT NULL,
  score     INT NOT NULL
);

CREATE TABLE course_rating
(
  id        SERIAL PRIMARY KEY,
  course_id INT REFERENCES courses(id) NOT NULL,
  user_id   INT REFERENCES users(id) NOT NULL UNIQUE,
  rating    INT NOT NULL
);

SELECT * FROM courses;

SELECT * FROM game_format;

SELECT * FROM rounds;

SELECT * FROM course_rating;



