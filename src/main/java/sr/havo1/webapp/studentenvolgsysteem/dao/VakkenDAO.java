package sr.havo1.webapp.studentenvolgsysteem.dao;

import sr.havo1.webapp.studentenvolgsysteem.entity.Vakken;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/20/2018.
 */
public class VakkenDAO {

    public static final EntityManagerFactory ENTITY_MANAGER_FACTORY = Persistence.createEntityManagerFactory("studentenvolgsysteem");

    public Vakken addVak(Vakken vak) {
        // Create an EntityManager
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        Vakken newVak = new Vakken();
        try {
            // Get a transaction
            transaction = manager.getTransaction();
            // Begin the transaction
            transaction.begin();

            // Create a new object
            newVak.setVaknaam(vak.getVaknaam());
            newVak.setAfkorting(vak.getAfkorting());

            // Save the object
            manager.persist(newVak);

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
        return newVak;
    }

    public List<Vakken> loadAllVakken() {

        List<Vakken> vakken = new ArrayList<Vakken>();

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();

            vakken = manager.createQuery("SELECT v FROM Vakken v", Vakken.class).getResultList();

            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return vakken;
    }

    public Vakken getVak(Long vakId) {
        Vakken vak = new Vakken();
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            vak = manager.find(Vakken.class, vakId);
            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return vak;
    }

    public boolean updateVak(Vakken vak) {

        boolean isUpdated = false;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.merge(vak);
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

    public boolean deleteVak(Vakken vak) {
        boolean isDeleted;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.remove(manager.contains(vak) ? vak : manager.merge(vak));
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
