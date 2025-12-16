# Gruppenpraxis CH - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Gruppenpraxis CH**

## Example Organization: Gruppenpraxis CH

Profiles: [CH Core Organization](StructureDefinition-ch-core-organization.md), [CH Core Organization EPR](StructureDefinition-ch-core-organization-epr.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000201041

**name**: Gruppenpraxis CH

**telecom**: [+41322345566](tel:+41322345566), fax: +41322346677(Work), [bereit@gruppenpraxis.ch](mailto:bereit@gruppenpraxis.ch), [http://www.gruppenpraxis.ch](http://www.gruppenpraxis.ch)

**address**: Doktorgasse 2 Musterhausen 8888 CH (work)



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "GruppenpraxisCH",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000201041"
    }
  ],
  "name" : "Gruppenpraxis CH",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41322345566",
      "use" : "work"
    },
    {
      "system" : "fax",
      "value" : "+41322346677",
      "use" : "work"
    },
    {
      "system" : "email",
      "value" : "bereit@gruppenpraxis.ch",
      "use" : "work"
    },
    {
      "system" : "url",
      "value" : "http://www.gruppenpraxis.ch",
      "use" : "work"
    }
  ],
  "address" : [
    {
      "use" : "work",
      "line" : ["Doktorgasse", "2"],
      "city" : "Musterhausen",
      "postalCode" : "8888",
      "country" : "CH"
    }
  ]
}

```
