package sr.havo1.webapp.studentenvolgsysteem.dao;

import sr.havo1.webapp.studentenvolgsysteem.entity.Schooljaar;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/20/2018.
 */
public class SchooljaarDAO {

    public static final EntityManagerFactory ENTITY_MANAGER_FACTORY = Persistence.createEntityManagerFactory("studentenvolgsysteem");

    public Schooljaar addSchooljaar(Schooljaar schooljaar) {
        // Create an EntityManager
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        Schooljaar newShooljaar = new Schooljaar();
        try {
            // Get a transaction
            transaction = manager.getTransaction();
            // Begin the transaction
            transaction.begin();

            // Create a new object
            newShooljaar.setSchooljaar(schooljaar.getSchooljaar());
            newShooljaar.setStatus(schooljaar.isStatus());

            // Save the object
            manager.persist(newShooljaar);

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
        return newShooljaar;
    }

    public List<Schooljaar> loadAllSchooljaar() {

        List<Schooljaar> schooljaar = new ArrayList<Schooljaar>();

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();

            schooljaar = manager.createQuery("SELECT s FROM Schooljaar s", Schooljaar.class).getResultList();

            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return schooljaar;
    }

    public Schooljaar getSchooljaar(Long schooljaarId) {
        Schooljaar schooljaar = new Schooljaar();
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            schooljaar = manager.find(Schooljaar.class, schooljaarId);
            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return schooljaar;
    }

    public boolean updateSchooljaar(Schooljaar schooljaar) {

        boolean isUpdated = false;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.merge(schooljaar);
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

    public boolean deleteSchooljaar(Schooljaar schooljaar) {
        boolean isDeleted;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.remove(manager.contains(schooljaar) ? schooljaar : manager.merge(schooljaar));
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
