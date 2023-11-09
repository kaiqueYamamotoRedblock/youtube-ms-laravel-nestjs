-- CreateTable
CREATE TABLE "Emails" (
    "id" INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    "email" TEXT NOT NULL,
    "tags" TEXT NOT NULL,
    "domain" TEXT NOT NULL
);

-- CreateIndex
CREATE UNIQUE INDEX "Emails_domain_key" ON "Emails"("domain");
