# Klinik für Psychiatrie - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Klinik für Psychiatrie**

## Example Organization: Klinik für Psychiatrie

Profile: [CH Core Organization](StructureDefinition-ch-core-organization.md)

**identifier**: [UIDB](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-uidb.html)/CHE108791452, [ZSR](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-zsr.html)/Y604801, [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601022050702

**name**: Biller AG

**telecom**: ph: 061 956 99 00, [info@biller.ch](mailto:info@biller.ch)

**address**: Billerweg 128 Frenkendorf 4414 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "ClaimBiller",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.16.756.5.35",
    "value" : "CHE108791452"
  },
  {
    "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
    "value" : "Y604801"
  },
  {
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601022050702"
  }],
  "name" : "Biller AG",
  "telecom" : [{
    "system" : "phone",
    "value" : "061 956 99 00"
  },
  {
    "system" : "email",
    "value" : "info@biller.ch"
  }],
  "address" : [{
    "line" : ["Billerweg 128"],
    "city" : "Frenkendorf",
    "postalCode" : "4414"
  }]
}

```
