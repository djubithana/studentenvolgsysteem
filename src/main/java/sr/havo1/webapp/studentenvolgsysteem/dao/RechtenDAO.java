package sr.havo1.webapp.studentenvolgsysteem.dao;

import sr.havo1.webapp.studentenvolgsysteem.entity.Rechten;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/11/2018.
 */
public class RechtenDAO {

    public static final EntityManagerFactory ENTITY_MANAGER_FACTORY = Persistence.createEntityManagerFactory("studentenvolgsysteem");

    public Rechten addRecht(Rechten recht) {
        // Create an EntityManager
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        Rechten newRecht = new Rechten();
        try {
            // Get a transaction
            transaction = manager.getTransaction();
            // Begin the transaction
            transaction.begin();

            // Create a new object
            newRecht.setRechtnaam(recht.getRechtnaam());

            // Save the object
            manager.persist(newRecht);

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
        return newRecht;
    }

    public List<Rechten> loadAllRechten() {

        List<Rechten> rechten = new ArrayList<Rechten>();

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();

            rechten = manager.createQuery("SELECT r FROM Rechten r", Rechten.class).getResultList();

            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return rechten;
    }

    public Rechten getRecht(Long recht_id) {
        Rechten recht = new Rechten();
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            recht = manager.find(Rechten.class, recht_id);
            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return recht;
    }

    public boolean updateRecht(Rechten recht) {

        boolean isUpdated = false;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.merge(recht);
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

    public boolean deleteRecht(Rechten recht) {
        boolean isDeleted;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.remove(manager.contains(recht) ? recht : manager.merge(recht));
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
