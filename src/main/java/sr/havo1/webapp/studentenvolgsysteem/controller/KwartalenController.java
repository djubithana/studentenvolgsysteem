package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.KwartalenDOA;
import sr.havo1.webapp.studentenvolgsysteem.entity.Kwartalen;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

/**
 * Created by asus user on 7/27/2018.
 */
@Path("/kwartaal")
public class KwartalenController {



        private KwartalenDOA kwartalenDOA = new KwartalenDOA();

        @Path("/list")
        @GET
        @Produces(MediaType.APPLICATION_JSON)
        public List<Kwartalen> findAll() {
            return kwartalenDOA.loadAllKwartalen();
        }

        @Path("/addKwartaal")
        @POST
        @Consumes(MediaType.APPLICATION_JSON)
        @Produces(MediaType.APPLICATION_JSON)
        public Kwartalen add(Kwartalen kwartaal) {
            return kwartalenDOA.addKwartaal(kwartaal);
        }

        @Path("/updateKwartaal")
        @POST
        @Consumes(MediaType.APPLICATION_JSON)
        @Produces(MediaType.APPLICATION_JSON)
        public Kwartalen update(Kwartalen kwartaal) {
            kwartalenDOA.updateKwartaal(kwartaal);
            return kwartaal;
        }

        @Path("/removeKwartaal")
        @POST
        @Consumes(MediaType.APPLICATION_JSON)
        @Produces(MediaType.APPLICATION_JSON)
        public Kwartalen remove(Kwartalen kwartaal) {
            kwartalenDOA.deleteKwartaal(kwartaal);
            return kwartaal;
        }

        @Path("/getKwartaal")
        @POST
        @Consumes(MediaType.APPLICATION_JSON)
        @Produces(MediaType.APPLICATION_JSON)
        public Kwartalen getKwartaal(Kwartalen kwartaal) {
            return kwartalenDOA.getKwartaal(kwartaal.getKwartaal_id());
        }
    }

