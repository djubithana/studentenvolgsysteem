package sr.havo1.webapp.studentenvolgsysteem.dao;

import sr.havo1.webapp.studentenvolgsysteem.entity.Rollen;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/11/2018.
 */
public class RollenDAO {

    public static final EntityManagerFactory ENTITY_MANAGER_FACTORY = Persistence.createEntityManagerFactory("studentenvolgsysteem");

    public Rollen addRol(Rollen rol) {
        // Create an EntityManager
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        Rollen newRol = new Rollen();
        try {
            // Get a transaction
            transaction = manager.getTransaction();
            // Begin the transaction
            transaction.begin();

            // Create a new object
            newRol.setRolnaam(rol.getRolnaam());

            // Save the object
            manager.persist(newRol);

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
        return newRol;
    }

    public List<Rollen> loadAllRollen() {

        List<Rollen> rollen = new ArrayList<Rollen>();

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();

            rollen = manager.createQuery("SELECT r FROM Rollen r", Rollen.class).getResultList();

            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return rollen;
    }

    public Rollen getRol(Long rolId) {
        Rollen rol = new Rollen();
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            rol = manager.find(Rollen.class, rolId);
            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return rol;
    }

    public boolean updateRol(Rollen rol) {

        boolean isUpdated = false;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.merge(rol);
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

    public boolean deleteRol(Rollen rol) {
        boolean isDeleted;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.remove(manager.contains(rol) ? rol : manager.merge(rol));
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
