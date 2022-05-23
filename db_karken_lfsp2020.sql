CREATE TABLE IF NOT EXISTS ruta(
    id INT AUTO_INCREMENT,
    b1ra VARCHAR(4),
    b1rb VARCHAR(7),
    b1rc VARCHAR(10),
    b1rd VARCHAR(4),
    b1re VARCHAR(10),
    b1rf VARCHAR(2),
    b1rg VARCHAR(100),
    b1rh VARCHAR(2),
    b3r1 VARCHAR(2),
    b3r2 VARCHAR(2),
    b3r3 VARCHAR(2),
    created_at DATETIME,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS art(
    id INT AUTO_INCREMENT,
    ruta_id INT,
    b2ra VARCHAR(2),
    b2rb VARCHAR(2),
    b2rc VARCHAR(1),
    b2rd VARCHAR(3),
    b2re VARCHAR(1),
    b2rf VARCHAR(2),
    created_at DATETIME,
    PRIMARY KEY(id),
    FOREIGN KEY(ruta_id) REFERENCES ruta(id)
);