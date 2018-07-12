package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.DocentenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.Docenten;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

/**
 * Created by DENCIO on 6/30/2018.
 */

@Path("/docenten")
public class DocentenController {

    private DocentenDAO docentenDAO = new DocentenDAO();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Docenten> findAll() {
        return docentenDAO.loadAllDocenten();
    }

    @Path("/addDocent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Docenten add(Docenten docent) {
        return docentenDAO.addDocent(docent);
    }

    @Path("/updateDocent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Docenten update(Docenten docent) {
        docentenDAO.updateDocent(docent);
        return docent;
    }

    @Path("/removeDocent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Docenten remove(Docenten docent) {
        docentenDAO.deleteDocent(docent);
        return docent;
    }

    @Path("/getDocent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Docenten getDocent(Docenten docent) {
        return docentenDAO.getDocent(docent.getDocent_id());
    }
}
