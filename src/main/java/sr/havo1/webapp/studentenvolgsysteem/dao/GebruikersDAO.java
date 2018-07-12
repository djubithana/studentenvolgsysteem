package sr.havo1.webapp.studentenvolgsysteem.dao;

import sr.havo1.webapp.studentenvolgsysteem.entity.Gebruikers;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import java.util.ArrayList;
import java.util.List;

/**
 * Created by DENCIO on 6/11/2018.
 */
public class GebruikersDAO {

    public static final EntityManagerFactory ENTITY_MANAGER_FACTORY = Persistence.createEntityManagerFactory("studentenvolgsysteem");

    public Gebruikers addGebruiker(Gebruikers gebruiker) {
        // Create an EntityManager
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        Gebruikers newGebruiker = new Gebruikers();
        try {
            // Get a transaction
            transaction = manager.getTransaction();
            // Begin the transaction
            transaction.begin();

            // Create a new object
            newGebruiker.setVoornaam(gebruiker.getVoornaam());
            newGebruiker.setAchternaam(gebruiker.getAchternaam());
            newGebruiker.setEmail(gebruiker.getEmail());
            newGebruiker.setWachtwoord(gebruiker.getWachtwoord());
            newGebruiker.setRegistratiedatum(gebruiker.getRegistratiedatum());
            newGebruiker.setLaatst_ingelogd_op(gebruiker.getLaatst_ingelogd_op());
            newGebruiker.setRol_recht_id(gebruiker.getRol_recht_id());

            // Save the object
            manager.persist(newGebruiker);

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
        return newGebruiker;
    }

    public List<Gebruikers> loadAllGebruikers() {

        List<Gebruikers> gebruikers = new ArrayList<Gebruikers>();

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();

            gebruikers = manager.createQuery("SELECT g FROM Gebruikers g", Gebruikers.class).getResultList();

            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return gebruikers;
    }

    public Gebruikers getGebruiker(Long gebruikerId) {
        Gebruikers gebruiker = new Gebruikers();
        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            gebruiker = manager.find(Gebruikers.class, gebruikerId);
            transaction.commit();
        } catch (Exception ex) {
            if (transaction != null) {
                transaction.rollback();
            }
            ex.printStackTrace();
        } finally {
            manager.close();
        }
        return gebruiker;
    }

    public boolean updateGebruiker(Gebruikers gebruiker) {

        boolean isUpdated = false;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.merge(gebruiker);
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

    public boolean deleteGebruiker(Gebruikers gebruiker) {
        boolean isDeleted;

        EntityManager manager = ENTITY_MANAGER_FACTORY.createEntityManager();
        EntityTransaction transaction = null;

        try {
            transaction = manager.getTransaction();
            transaction.begin();
            manager.remove(manager.contains(gebruiker) ? gebruiker : manager.merge(gebruiker));
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
