package sr.havo1.webapp.studentenvolgsysteem.dao;

import sr.havo1.webapp.studentenvolgsysteem.entity.Studenten;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/11/2018.
 */
public class StudentenDAO {

    public static final EntityManagerFactory ENTITY_MANAGER_FACTORY = Persistence.createEntityManagerFactory("studentenvolgsysteem");

    public Studenten addStudent(Studenten student) {
        // Create an EntityManager
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        Studenten newStudent = new Studenten();
        try {
            // Get a transaction
            transaction = manager.getTransaction();
            // Begin the transaction
            transaction.begin();

            // Create a new object
            newStudent.setVoornaam(student.getVoornaam());
            newStudent.setAchternaam(student.getAchternaam());
            newStudent.setGeboortedatum(student.getGeboortedatum());
            newStudent.setGeslacht(student.getGeslacht());
            newStudent.setStatus(student.getStatus());
            newStudent.setGeboorteplaats(student.getGeboorteplaats());
            newStudent.setDistrict_id(student.getDistrict_id());
            newStudent.setAdres(student.getAdres());
            newStudent.setTelefoon(student.getTelefoon());
            newStudent.setMedische_klachten(student.getMedische_klachten());
            newStudent.setNaam_muloschool(student.getNaam_muloschool());
            newStudent.setRichting_mulo(student.getRichting_mulo());
            newStudent.setNaam_verzorger(student.getNaam_verzorger());
            newStudent.setVerzorger_beroep(student.getVerzorger_beroep());
            newStudent.setVerzorger_district_id(student.getVerzorger_district_id());
            newStudent.setVerzorger_adres(student.getVerzorger_adres());
            newStudent.setVerzorger_telefoon(student.getVerzorger_telefoon());
            newStudent.setVerzorger_werkadres(student.getVerzorger_werkadres());
            newStudent.setVerzorger_werktelefoon(student.getVerzorger_werktelefoon());
            newStudent.setPakket_id(student.getPakket_id());
            newStudent.setType_verzorger(student.getType_verzorger());
            newStudent.setStatus(student.getStatus());

            // Save the object
            manager.persist(newStudent);

            // Commit the transaction
            transaction.commit();
        } catch (Exception ex) {
            // If there are any exceptions, roll back the changes
            if (transaction != null) {
                transaction.rollback();
            }
            // Print the Exception
            ex.printStackTrace();
        } finally {
            // Close the EntityManager
            manager.close();
        }
        return newStudent;
    }

    public List<Studenten> loadAllStudenten() {

        List<Studenten> studenten = new ArrayList<Studenten>();

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();

            studenten = manager.createQuery("SELECT s FROM Studenten s", Studenten.class).getResultList();

            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return studenten;
    }

    public Studenten getStudent(Long studentId) {
        Studenten student = new Studenten();
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            student = manager.find(Studenten.class, studentId);
            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return student;
    }

    public boolean updateStudent(Studenten student) {

        boolean isUpdated = false;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.merge(student);
            transaction.commit();
            isUpdated = true;
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
            isUpdated = false;
        } finally {
            manager.close();
        }

        return isUpdated;
    }

    public boolean deleteStudent(Studenten student) {
        boolean isDeleted;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.remove(manager.contains(student) ? student : manager.merge(student));
            transaction.commit();
            isDeleted = true;
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
            isDeleted = false;
        } finally {
            manager.close();
        }
        return isDeleted;
    }
}
