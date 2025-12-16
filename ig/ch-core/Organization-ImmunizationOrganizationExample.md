# Organization example for immunization - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization example for immunization**

## Example Organization: Organization example for immunization

Profile: [CH Core Organization](StructureDefinition-ch-core-organization.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601888888884

**name**: Gruppenpraxis CH

**telecom**: ph: tel:+41.32.234.55.66(Work), fax: fax:+41.32.234.55.67(Work), [mailto:bereit@gruppenpraxis.ch](mailto:mailto:bereit@gruppenpraxis.ch), [http://www.gruppenpraxis.ch](http://www.gruppenpraxis.ch)

**address**: Doktorgasse 2 Musterhausen ZH 8888 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "ImmunizationOrganizationExample",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601888888884"
    }
  ],
  "name" : "Gruppenpraxis CH",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "tel:+41.32.234.55.66",
      "use" : "work"
    },
    {
      "system" : "fax",
      "value" : "fax:+41.32.234.55.67",
      "use" : "work"
    },
    {
      "system" : "email",
      "value" : "mailto:bereit@gruppenpraxis.ch",
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
      "line" : ["Doktorgasse 2"],
      "city" : "Musterhausen",
      "state" : "ZH",
      "postalCode" : "8888",
      "country" : "CH"
    }
  ]
}

```
