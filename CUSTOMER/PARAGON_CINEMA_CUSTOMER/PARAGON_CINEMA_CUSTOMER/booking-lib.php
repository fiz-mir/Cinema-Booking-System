<?php
class Reserve
{
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  private $pdo = null;
  private $stmt = null;
  public $error = null;

  function __construct()
  {
    $this->pdo = new PDO(
      "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
      DB_USER,
      DB_PASSWORD,
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );
  }

  // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct()
  {
    if ($this->stmt !== null) {
      $this->stmt = null;
    }
    if ($this->pdo !== null) {
      $this->pdo = null;
    }
  }

  // (C) HELPER FUNCTION - RUN SQL QUERY
  function query($sql, $data = null): void
  {
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute($data);
  }
// (D) GET SEATS FOR GIVEN SESSION
function get($sessid)
{
  $this->query(
    "SELECT sa.seatNo, COUNT(r.custid) AS bookedSeats
    FROM seats sa
    LEFT JOIN bookings r ON sa.hallNo = r.hallNo 
      AND sa.seatNo = r.seatNo 
      AND r.session_id = ?
    LEFT JOIN sessions se ON sa.hallNo = se.hallNo
    WHERE se.session_id = ?
    GROUP BY sa.seatNo
    ORDER BY sa.seatNo",
    [$sessid, $sessid]
  );
  $sess = $this->stmt->fetchAll();
  return $sess;
}

  // (D) GET SEATS FOR GIVEN SESSION
  function getseatchosen($userid)
  {
    $this->query(
      "SELECT b.seatNo, se.showtime_start, b.hallNo, m.title 
      FROM bookings b
      LEFT JOIN sessions se USING(session_id)
      LEFT JOIN movie m USING(movieid)
      WHERE b.custid = ?",
      [$userid]
    );
    $bookdata = $this->stmt->fetchAll();
    return $bookdata;
  }


  // (E) SAVE RESERVATION
  function save($sessid, $userid, $hallno, $seats)
  {
    $sql = "INSERT INTO bookings (session_id, custid, hallNo, seatNo) VALUES ";
    $data = [];
    foreach ($seats as $seat) {
      $sql .= "(?,?,?,?),";
      array_push($data, $sessid, $userid, $hallno,$seat);
    }
    $sql = substr($sql, 0, -1);
    $this->query($sql, $data);
    return true;
  }
}

// (F) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "paragoncinemadb");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (G) NEW CATEGORY OBJECT
$_RSV = new Reserve();
